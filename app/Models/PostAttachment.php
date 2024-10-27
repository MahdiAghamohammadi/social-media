<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostAttachment extends Model
{
    const UPDATED_AT = null;

    protected $fillable = [
        'post_id',
        'name',
        'path',
        'mime',
        'created_by',
    ];
}
