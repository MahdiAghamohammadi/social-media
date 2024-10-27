<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupUser extends Model
{
    protected $fillable = [
        'status',
        'role',
        'user_id',
        'group_id',
        'created_by',
        'token',
        'token_expire_date',
    ];
}
