<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Forum extends Model
{
    use SoftDeletes;

    protected $table = 'forums';

    protected $dates = ['deleted_at'];

    public function replies()
    {
        return $this->hasMany('App\Models\ForumReply');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\Access\User\User');
    }

    public function forumViews()
    {
        return $this->hasMany('App\Models\ForumView');
    }

    public function totalViews()
    {
        return $this->hasMany('App\Models\ForumView')
            ->selectRaw('SUM(views) as total,forum_id')
            ->groupBy('forum_id');
    }
}
