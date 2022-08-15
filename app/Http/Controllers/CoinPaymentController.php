<?php

namespace App\Http\Controllers;

use App\Models\btcPayment;
use App\Models\Currency;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class CoinPaymentController extends Controller
{
    public function webhook(Request $request)
    {
        info('CoinPayment webhook Reached');

        info('CoinPayment webhook Request: ' . json_encode($request->all()));

        $merchant_id = env('COINPAYMENTSMERCHANT');
        $ipn_secret = env('IPN_SECRET');
        info('CoinPayment webhook  Init');
        $txn_id = $request->txn_id;
        $payment = btcPayment::where("txn_id", $txn_id)->first();

        // getting this currencuy
        $currency = Currency::where('symbol', $request->currency)->first();
        if ($currency == "") {
            edie("Currency Mismatch");
        }

        if (!isset($request->ipn_mode) || $request->ipn_mode != 'hmac') {
            edie("IPN Mode is not HMAC");
        }

        if (!isset($_SERVER['HTTP_HMAC']) || empty($_SERVER['HTTP_HMAC'])) {
            edie("No HMAC Signature Sent.");
        }

        $requestFile = file_get_contents('php://input');
        if ($requestFile === false || empty($requestFile)) {
            edie("Error in reading Post Data");
        }

        if (!isset($request->merchant) || $request->merchant != trim($merchant_id)) {
            edie("No or incorrect merchant id.");
        }

        $hmac =  hash_hmac("sha512", $requestFile, trim($ipn_secret));
        if (!hash_equals($hmac, $_SERVER['HTTP_HMAC'])) {
            edie("HMAC signature does not match.");
        }

        // checking if this Request comes from ipn_type=Deposit
        if (isset($request->ipn_type) || $request->ipn_type == 'deposit') {
            info('Deposit Request Found');
            if ($request->status == 100 && $request->status_text == "Deposit confirmed") {
                // Proccess for Payment
                // getting this user
                $user = User::where('email', $request->label)->first();
                if (!$user) {
                    edie("User not Found. User Email: " . $request->label);
                }

                // Inserting New Transaction Request Storing into session
                $task = new btcPayment();
                $task->user_id = $user->id;
                $task->amount = $request->amount;
                $task->address = $request->address;
                $task->dest_tag = $request->label;
                $task->status = "complete";
                $task->txn_id = $request->txn_id;
                $task->save();


                $deposit = $user->transactions()->create([
                    'type' => "deposit",
                    'amount' => $request->amount,
                    'sum' => true,
                    'note' => $request->txn_id,
                    'reference' => "coinPayment Gateway",
                ]);

                info('CoinPayment Payment Success from Deposit');
            }
        } else {
            info('Invalid Transaction Type.');
        }
        info('Coin Payment Finish');
    }
}
