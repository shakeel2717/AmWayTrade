<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;

class WithdarwController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("user.withdraw.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'coin' => 'required|integer|exists:currencies,id',
            'amount' => 'required|numeric|min:5|max:1000000',
            'address' => 'required|string',
            'otp' => 'required|string|min:8|max:8',
        ]);

        // validating OTP
        if ($validated['otp'] != session('otp')) {
            return redirect()->back()->withErrors("Invalid OTP, Please retry");
        }


        $currency = Currency::findOrFail($validated['coin']);

        // checking if withdraw is not min
        if ($validated['amount'] < options("min withdraw")) {
            // fallback
            return redirect()->back()->withErrors("Min Withdrawals Limit is: " . options("min withdraw"));
        }

        // checking balance
        if ($validated['amount'] > balance(auth()->user()->id)) {
            return redirect()->back()->withErrors("Insufficient Balance");
        }

        $withdraw = auth()->user()->withdraws()->create([
            'currency_id' => $currency->id,
            'amount' => $validated['amount'],
            'address' => $validated['address'],
        ]);

        $fees = $validated['amount'] * options("withdraw fees") / 100;

        // creating transactions
        $withdrawTransaction = auth()->user()->transactions()->create([
            'type' => "withdraw",
            'amount' => $validated['amount'] - $fees,
            'sum' => false,
            'status' => false,
            'note' => $withdraw->id,
        ]);

        // withdrawal fees charges
        $withdrawTransaction = auth()->user()->transactions()->create([
            'type' => "withdrawals fees",
            'amount' => $fees,
            'sum' => false,
            'note' => $withdraw->id,
        ]);

        return redirect()->back()->with("success", "Withraw Request Submitted Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
