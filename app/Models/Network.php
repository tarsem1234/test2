<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Network extends Model
{
    use SoftDeletes;

    public function request_from_user(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Access\User\User::class, 'from_user_id');
    }

    public function request_to_user(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Access\User\User::class, 'to_user_id');
    }

    public function associate(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Access\User\User::class, $this->from_user_id === Auth::id() ? 'to_user_id' : 'from_user_id');
    }
}
