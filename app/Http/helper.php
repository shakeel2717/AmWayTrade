<?php

use App\Models\Option;
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
    $collection = directRefers($user_id);
    $collection->prepend(levelFirstRefers($user_id));
    $collection->prepend(levelSecondRefers($user_id));
    $collection->prepend(levelThirdRefers($user_id));

    return $collection;
}


function directRefers($user_id)
{
    $allRefers = [];
    $user = User::find($user_id);
    $refers = User::where('refer', $user->username)->get();
    foreach ($refers as $refer) {
        $allRefers[] = $refer->id;
    }
    return collect($allRefers);
}


function levelFirstRefers($user_id)
{
    $allRefers = [];
    $user = User::find($user_id);
    $refers = User::where('refer', $user->username)->get();
    foreach ($refers as $refer) {
        $level1Refers = User::where('refer', $refer->username)->get();
        foreach ($level1Refers as $level1Refer) {
            $allRefers[] = $level1Refer->id;
        }
    }
    return collect($allRefers);
}


function levelSecondRefers($user_id)
{
    $allRefers = [];
    $user = User::find($user_id);
    $refers = User::where('refer', $user->username)->get();
    foreach ($refers as $refer) {
        $level1Refers = User::where('refer', $refer->username)->get();
        foreach ($level1Refers as $level1Refer) {
            $level2Refers = User::where('refer', $level1Refer->username)->get();
            foreach ($level2Refers as $level2Refer) {
                $allRefers[] = $level2Refer->id;
            }
        }
    }
    return collect($allRefers);
}


function levelThirdRefers($user_id)
{
    $allRefers = [];
    $user = User::find($user_id);
    $refers = User::where('refer', $user->username)->get();
    foreach ($refers as $refer) {
        $level1Refers = User::where('refer', $refer->username)->get();
        foreach ($level1Refers as $level1Refer) {
            $level2Refers = User::where('refer', $level1Refer->username)->get();
            foreach ($level2Refers as $level2Refer) {
                $level3Refers = User::where('refer', $level2Refer->username)->get();
                foreach ($level3Refers as $level3Refer) {
                    $allRefers[] = $level3Refer->id;
                }
            }
        }
    }
    return collect($allRefers);
}

function levelFourthRefers($user_id)
{
    $allRefers = [];
    $user = User::find($user_id);
    $refers = User::where('refer', $user->username)->get();
    foreach ($refers as $refer) {
        $level1Refers = User::where('refer', $refer->username)->get();
        foreach ($level1Refers as $level1Refer) {
            $level2Refers = User::where('refer', $level1Refer->username)->get();
            foreach ($level2Refers as $level2Refer) {
                $level3Refers = User::where('refer', $level2Refer->username)->get();
                foreach ($level3Refers as $level3Refer) {
                    $level4Refers = User::where('refer', $level3Refer->username)->get();
                    foreach ($level4Refers as $level4Refer) {
                        $allRefers[] = $level4Refer->id;
                    }
                }
            }
        }
    }
    return collect($allRefers);
}


function totalInvest($user_id)
{
    $userPlans = UserPlan::where("user_id", $user_id)->sum('amount');
    return $userPlans;
}

function totalActiveInvest($user_id)
{
    $userPlans = UserPlan::where("user_id", $user_id)->where('status', true)->sum('amount');
    return $userPlans;
}


function totalPayout($user_id)
{
    return $wihdraws = Withdraw::where('user_id', $user_id)->sum("amount");
}


function options($name)
{
    $option = Option::where('name', $name)->first();
    return $option->value;
}
