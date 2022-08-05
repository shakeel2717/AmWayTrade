<?php

namespace App\Http\Controllers;

use App\Models\Kyc;
use Illuminate\Http\Request;

class KycController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("user.kyc.index");
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
            'category' => 'required|string',
            'name' => 'required|string',
            'front' => 'required|image|mimes:png,jpg',
            'back' => 'required|image|mimes:png,jpg',
        ]);

        // storing attatchemnt into public folder

        $imageFrontName = auth()->user()->username . '_front.' . $request->front->getClientOriginalExtension();
        $request->front->move(public_path('kyc'), $imageFrontName);

        $imageBackName = auth()->user()->username . '_Back.' . $request->back->getClientOriginalExtension();
        $request->back->move(public_path('kyc'), $imageBackName);

        $kyc = auth()->user()->kyc()->create([
            'category' => $validated['category'],
            'name' => $validated['name'],
            'front' => $imageFrontName,
            'back' => $imageBackName,
        ]);

        return redirect()->back()->with('success','KYC Request Submit Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kyc  $kyc
     * @return \Illuminate\Http\Response
     */
    public function show(Kyc $kyc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kyc  $kyc
     * @return \Illuminate\Http\Response
     */
    public function edit(Kyc $kyc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kyc  $kyc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kyc $kyc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kyc  $kyc
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kyc $kyc)
    {
        //
    }
}
