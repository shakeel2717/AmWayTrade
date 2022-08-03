<?php

use App\Models\User;

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
