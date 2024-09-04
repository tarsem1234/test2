<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserLearningPoint extends Model
{
    use SoftDeletes;

    protected $table = 'user_learning_points';

    public function user()
    {
        return $this->belongsTo('App\Models\Access\User\User');
    }
}
