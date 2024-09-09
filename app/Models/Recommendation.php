<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Recommendation extends Model
{
    public function user(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Access\User\User::class);
    }

    public function recommendedBy(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Access\User\User::class, 'from_user_id');
    }
}
