<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Forum extends Model
{
    use SoftDeletes;

    protected $table = 'forums';

    public function replies()
    {
        return $this->hasMany(\App\Models\ForumReply::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\Access\User\User::class);
    }

    public function forumViews()
    {
        return $this->hasMany(\App\Models\ForumView::class);
    }

    public function totalViews()
    {
        return $this->hasMany(\App\Models\ForumView::class)
            ->selectRaw('SUM(views) as total,forum_id')
            ->groupBy('forum_id');
    }
}
