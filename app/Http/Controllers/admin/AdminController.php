<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class AdminController extends Controller
{
    public function clean()
    {
        Artisan::call("make:clean");
        return redirect()->back()->with("success", "Data Cleared Successfully");
    }

    public function profit()
    {
        Artisan::call("profit:calculate");
        return redirect()->back()->with("success", "All System Plans Profit updated Randomely");
    }

    public function blockchain()
    {
        Artisan::call("blockchain:run");
        return redirect()->back()->with("success", "Daily Profit and Unilevel Delivered!");
    }
}
