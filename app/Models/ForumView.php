<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ForumView extends Model
{
    protected $table = 'forum_views';

    public function forum(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Forum::class);
    }
}
