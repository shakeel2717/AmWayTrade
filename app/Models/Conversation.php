<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'support_id',
        'message',
    ];


    public function support()
    {
        return $this->belongsTo(Support::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
