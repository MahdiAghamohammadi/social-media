<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
    const UPDATED_AT = null;

    protected $fillable = [
        'user_id',
        'follower_id'
    ];
}
