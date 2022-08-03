<?php

use App\Models\User;
use App\Models\UserPlan;

function balance($user_id)
{
    return 0;
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
    $userPlans = UserPlan::where("user_id", $user_id)->get();
    foreach ($userPlans as $userPlan) {
        $invest += $userPlan->amount;
    }

    return $invest;
}
