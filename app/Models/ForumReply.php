<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ForumReply extends Model
{
    use SoftDeletes;

    protected $table = 'forum_replies';

    protected $dates = ['deleted_at'];

    public function forum()
    {
        return $this->belongsTo('App\Models\Forum');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\Access\User\User');
    }
}
