<?php

namespace App\Http\Livewire\user;

use App\Models\Currency;
use Livewire\Component;

class WithdrawCard extends Component
{
    public $currencies;
    public $coin;

    public function mount()
    {
        $this->currencies = Currency::where('status', true)->get();
    }

    public function render()
    {
        return view('livewire.user.withdraw-card');
    }
}
