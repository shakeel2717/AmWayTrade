<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("user.support.index");
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
            'message' => 'required|string',
        ]);

        // creating a new issue
        $support = Support::create([
            'user_id' => auth()->user()->id,
            'category' => $validated['category'],
            'message' => $validated['message'],
        ]);

        return redirect()->back()->with("success", "Your Message Delivered to our Support Team, Please wait for Response.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Support $support)
    {
        return view("user.support.show", compact("support"));
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
    public function update(Request $request, Support $support)
    {
        $validated = $request->validate([
            'message' => 'required|string',
        ]);

        // adding a reply under this Support ticket
        $support->conversations()->create([
            'user_id' => auth()->user()->id,
            'message' => $validated['message'],
        ]);

        return redirect()->back()->with('success','Your Message Sent Successfully to Support Team.');
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
