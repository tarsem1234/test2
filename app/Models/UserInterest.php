<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserInterest extends Model
{
    use SoftDeletes;

    protected $table = 'user_interests';

    public function user()
    {
        return $this->belongsTo(\App\Models\UserProfile::class);
    }
}
