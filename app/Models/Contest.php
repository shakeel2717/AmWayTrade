<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contest extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'reward',
        'fees',
        'status',
    ];

    public function lotteries()
    {
        return $this->hasMany(Lottery::class);
    }
}
