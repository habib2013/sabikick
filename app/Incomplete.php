<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Incomplete extends Model
{

    protected $fillable = [
        'user_id', 'expires_at'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
