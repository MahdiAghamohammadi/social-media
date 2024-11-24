<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GroupUser extends Model
{
    const UPDATED_AT = null;

    protected $fillable = [
        'status',
        'role',
        'user_id',
        'group_id',
        'created_by',
        'token',
        'token_expires_date',
    ];

    public function adminUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class);
    }
}
