<?php

namespace App\Http\Livewire\user;

use App\Models\Address;
use App\Models\btcPayment;
use App\Models\Currency;
use Livewire\Component;
use CoinpaymentsAPI;
use Exception;

class AddBalance extends Component
{
    public $currencies;
    public $amount;
    public $coin;
    public $qr;
    public $icon;
    public $statusLink;

    public function mount()
    {
        $this->currencies = Currency::where('status', true)->get();
    }


    protected $rules = [
        'coin' => 'required|integer',
        'amount' => 'required|integer|min:1',
    ];

    function createTransaction()
    {
        $this->validate();
        $currency = Currency::find($this->coin);
        $this->coin = $currency->name;
        $this->icon = $currency->icon;
        $private_key = env('PRIKEY');
        $public_key = env('PUBKEY');
        try {
            $cps_api = new CoinpaymentsAPI($private_key, $public_key, 'json');
            $currency1 = "USD";
            $currency2 = $currency->symbol;
            $buyer_email = auth()->user()->email;
            $ipn_url = env('IPN_URL');
            $information = $cps_api->CreateSimpleTransactionWithConversion($this->amount, $currency1, $currency2, $buyer_email, $ipn_url);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
            exit();
        }

        if ($information['error'] == 'ok') {
            $this->qr = $information['result']['address'];

            // adding this request into database

            $task = new btcPayment();
            $task->user_id = auth()->user()->id;
            $task->currency_id = $currency->id;
            $task->currencyf = $currency1;
            $task->amount = $information['result']['amount'];
            $task->amountf = $this->amount;
            $task->address = $information['result']['address'];
            $task->dest_tag = 1;
            $task->txn_id = $information['result']['txn_id'];
            $task->checkout_url = $information['result']['checkout_url'];
            $task->status_url = $information['result']['status_url'];
            $task->save();

            $this->statusLink = $task->status_url;
        } else {
            dd("API Connection Problem, Please Contact Administrator");
        }
    }

    public function render()
    {
        return view('livewire.user.add-balance');
    }
}
