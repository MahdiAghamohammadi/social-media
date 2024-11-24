<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupUser extends Model
{
    const UPDATED_AT = null;

    protected $fillable = [
        'status',
        'role',
        'user_id',
        'group_id',
        'created_by',
    ];
}
