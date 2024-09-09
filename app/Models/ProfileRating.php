<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class ProfileRating extends Model
{
    public function user(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Access\User\User::class);
    }

    public function ratedBy(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Access\User\User::class, 'from_user_id');
    }
}
