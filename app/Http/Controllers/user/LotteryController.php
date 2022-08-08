<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Contest;
use App\Models\Lottery;
use Illuminate\Http\Request;

class LotteryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("user.lottery.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contest = Contest::where('status', 'open')->firstOrFail();
        return view("user.lottery.create", compact("contest"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // checking active contests
        $contest = Contest::where('status', 'open')->firstOrFail();

        // checking if already participated
        $security = Lottery::where('user_id', auth()->user()->id)->where('contest_id', $contest->id)->get();
        if ($security->count() > 0) {
            return redirect()->back()->withErrors("You are already Participated in this Contest.");
        }

        // checking balance
        // checking balance
        if ($contest->fees > balance(auth()->user()->id)) {
            return redirect()->back()->withErrors("Insufficient Balance");
        }

        // adding a new lottery entry
        $contest->lotteries()->create([
            'user_id' => auth()->user()->id,
            'amount' => $contest->fees,
        ]);

        // creating transactions
        $transaction = auth()->user()->transactions()->create([
            'type' => "contest participate",
            'amount' => $contest->fees,
            'sum' => false,
            'reference' => "participation in the contest: " . $contest->title . "",
        ]);

        return redirect()->back()->with("success", "Your participation in the contest was successful.");
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
