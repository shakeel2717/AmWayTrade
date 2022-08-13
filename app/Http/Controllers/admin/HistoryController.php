<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HistoryController extends Controller
{


    public function users()
    {
        return view("admin.history.users");
    }


    public function deposit()
    {
        return view("admin.history.deposits");
    }

    public function withdraws()
    {
        return view("admin.history.withdraws");
    }

    public function withdrawsPending()
    {
        return view("admin.history.withdrawsPending");
    }

    public function support()
    {
        return view("admin.history.support");
    }

    public function index()
    {
        //
    }

    public function rewards()
    {
        return view("admin.history.rewards");
    }
}
