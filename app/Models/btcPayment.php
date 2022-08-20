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
        'currency',
        'amount',
        'amountf',
        'address',
        'dest_tag',
        'txn_id',
        'status',
        'checkout_url',
        'status_url'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }


    public function currency(){
        return $this->belongsTo(Currency::class);
    }

}
