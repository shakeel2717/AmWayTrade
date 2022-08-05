<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kyc extends Model
{
    use HasFactory;


    protected $fillable = [
        'category',
        'name',
        'front',
        'back',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
