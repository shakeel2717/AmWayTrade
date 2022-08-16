<?php

namespace App\Http\Livewire\user;

use App\Models\Address;
use App\Models\Currency;
use Livewire\Component;
use CoinpaymentsAPI;
use Exception;

class AddBalance extends Component
{
    public $currencies;
    public $coin;
    public $qr;
    public $icon;

    public function mount()
    {
        $this->currencies = Currency::where('status', true)->get();
    }

    function updatedCoin($coin)
    {
        $currency = Currency::find($coin);
        $this->coin = $currency->name;
        $this->icon = $currency->icon;
        $address = Address::where('user_id', auth()->user()->id)->where('currency_id', $coin)->first();
        if ($address != "") {
            $this->qr = $address->address;
            info("Already Address Found");
        } else {
            info("Already Not Address Found");
            // fetching the address from coinPayment
            $private_key = env('PRIKEY');
            $public_key = env('PUBKEY');
            $method = $currency->symbol;

            try {
                $cps_api = new CoinpaymentsAPI($private_key, $public_key, 'json');
                $currency2 = $method;
                $buyer_email = auth()->user()->email;
                $ipn_url = env('IPN_URL');
                $information = $cps_api->GetCallbackAddressWithIpn($currency2, $ipn_url, $buyer_email);
                info("Try Successs");
            } catch (Exception $e) {
                echo 'Error: ' . $e->getMessage();
                exit();
            }

            if ($information['error'] != 'ok') {
                info("Error: " . json_encode($information));
                return "<h3>There's Some Issue in The API, Please Contact Support!</h3>";
            }

            $address = new Address();
            $address->user_id = auth()->user()->id;
            $address->currency_id = $coin;
            $address->address = $information['result']['address'];
            $address->save();
            info("Address Saved");

            $this->qr = $address->address;
        }
    }

    public function render()
    {
        return view('livewire.user.add-balance');
    }
}
