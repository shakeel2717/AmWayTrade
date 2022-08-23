<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'category',
        'message',
        'solved',
    ];

    public function conversations()
    {
        return $this->hasMany(Conversation::class)->orderBy("id","Desc");
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
