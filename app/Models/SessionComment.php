<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SessionComment extends Model
{
    protected $fillable = ['day', 'session_id', 'comment', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
