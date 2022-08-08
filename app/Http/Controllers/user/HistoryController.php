<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class HistoryController extends Controller
{

    public function deposit()
    {
        return view("user.history.deposit");
    }

    public function recent()
    {
        return view("user.history.recent");
    }


    public function withdraw()
    {
        return view("user.history.withdraw");
    }

    public function direct()
    {
        return view("user.history.direct");
    }


    public function level1()
    {
        return view("user.history.indirect.level1");
    }

    public function level2()
    {
        return view("user.history.indirect.level2");
    }

    public function level3()
    {
        return view("user.history.indirect.level3");
    }

    public function support()
    {
        return view("user.history.support");
    }


    public function passiveLevel1()
    {
        return view("user.history.passive.level1");
    }

    public function profit()
    {
        return view("user.history.profit");
    }

    public function directCommission()
    {
        return view("user.history.directCommission");
    }

    public function indirectCommissionL1()
    {
        return view("user.history.indirectCommissionL1");
    }

    public function indirectCommissionL2()
    {
        return view("user.history.indirectCommissionL2");
    }

    public function indirectCommissionL3()
    {
        return view("user.history.indirectCommissionL3");
    }


    public function tree($user = null)
    {
        $user = User::findOrFail($user);
        return view("user.history.tree", compact("user"));
    }

    public function index()
    {
        //
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
        //
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
