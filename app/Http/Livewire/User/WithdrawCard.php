<?php

namespace App\Http\Livewire\user;

use App\Mail\WithdrawRequest;
use App\Models\Currency;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class WithdrawCard extends Component
{
    public $currencies;
    public $coin;

    public function mount()
    {
        $this->currencies = Currency::where('status', true)->get();
    }

    public function otpRequest()
    {
        // sending OTP Request
        $otp = str()->random(8);
        // storing this OTP into session
        session(['otp' => $otp]);
        Mail::to(auth()->user()->email)->send(new WithdrawRequest());
        $this->emit('success');
    }

    public function render()
    {
        return view('livewire.user.withdraw-card');
    }
}
