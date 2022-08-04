<?php

namespace App\Http\Controllers\user;

use App\Events\PlanCommissionEvent;
use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\UserPlan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plans = Plan::where('status', true)->get();
        return view('user.plan.index', compact('plans'));
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
    public function show(Plan $plan)
    {
        return view("user.plan.show", compact("plan"));
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
        $validated = $request->validate([
            'amount' => 'required|numeric|min:50|max:1000001',
        ]);
        // Activating User Plan
        $plan = Plan::findOrFail($id);

        // checking balance
        if ($validated['amount'] > balance(auth()->user()->id)) {
            return redirect()->back()->withErrors("Insufficient Balance");
        }

        // activating plan
        $userPlan = auth()->user()->userPlans()->create([
            'plan_id' => $plan->id,
            'amount' => $validated['amount'],
            'status' => true,
        ]);

        // checking if this user has valid refer
        if (auth()->user()->refer != "default") {
            // dispatch event
            PlanCommissionEvent::dispatch($userPlan);
        }

        // creating transactions
        $packageActive = auth()->user()->transactions()->create([
            'type' => "plan activate",
            'amount' => $validated['amount'],
            'sum' => false,
            'reference' => $plan->name . " Plan Activated!",
            'note' => $userPlan->id,
        ]);

        return redirect()->route("user.dashboard.index")->with("success", "Package Activated Successfully");
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
