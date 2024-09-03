<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserProfile extends Model
{
    use SoftDeletes;

    protected $table = 'user_profiles';

    protected $fillable = ['full_name', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\Models\Access\User\User');
    }

    public function user_interests()
    {
        return $this->hasMany('App\Models\UserInterest');
    }
}
