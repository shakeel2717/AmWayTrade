<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoinPaymentController extends Controller
{
    public function webhook(Request $request)
    {
        info("Webhook reached");
        info("Data: " . json_encode($request));
    }
}
