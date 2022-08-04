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
        ]);

        $currency = Currency::findOrFail($validated['coin']);

        // checking if withdraw is not min
        if ($validated['amount'] < options("min withdraw")) {
            // fallback
            return redirect()->back()->withErrors("Min Withdrawals Limit is: " . options("min withdraw"));
        }

        $withdraw = auth()->user()->withdraws()->create([
            'currency_id' => $currency->id,
            'amount' => $validated['amount'],
        ]);

        // creating transactions
        $withdrawTransaction = auth()->user()->transactions()->create([
            'type' => "Withdraw",
            'amount' => $validated['amount'],
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
