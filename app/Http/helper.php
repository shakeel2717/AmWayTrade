<?php

use App\Models\Transaction;
use App\Models\User;
use App\Models\UserPlan;
use App\Models\Withdraw;

function balance($user_id)
{
    $in = Transaction::where('user_id', $user_id)->where('sum', true)->sum('amount');
    $out = Transaction::where('user_id', $user_id)->where('sum', false)->sum('amount');
    return $in - $out;
}

function allRefers($user_id)
{
    $allRefers = [];
    $user = User::find($user_id);
    $refers = User::where('refer', $user->username)->get();
    foreach ($refers as $refer) {
        $allRefers[] = $refer->id;
    }
    return collect($allRefers);
}

function totalInvest($user_id)
{
    $invest = 0;
    $userPlans = UserPlan::where("user_id", $user_id)->sum('amount');
    return $userPlans;
}


function totalPayout($user_id)
{
    return $wihdraws = Withdraw::where('user_id', $user_id)->sum("amount");
}
