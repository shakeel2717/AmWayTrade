<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'price_from',
        'price_to',
        'profit_from',
        'profit_to',
        'status',
    ];

    public function userPlans()
    {
        return $this->hasMany(UserPlan::class);
    }
}
