<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class btcPayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'currency_id',
        'amount',
        'address',
        'dest_tag',
        'txn_id',
        'status',
    ];
}
