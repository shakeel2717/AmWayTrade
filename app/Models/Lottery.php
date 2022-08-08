<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lottery extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'contest_id',
        'amount',
        'winner',
    ];


    public function contest()
    {
        return $this->belongsTo(Contest::class);
    }
}
