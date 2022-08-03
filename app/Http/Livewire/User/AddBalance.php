<?php

namespace App\Http\Livewire\User;

use App\Models\Address;
use App\Models\Currency;
use Livewire\Component;

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
        $this->qr = $address->address;
    }

    public function render()
    {
        return view('livewire.user.add-balance');
    }
}
