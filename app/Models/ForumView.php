<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ForumView extends Model {

    protected $table = "forum_views";

    public function forum() {
        return $this->belongsTo('App\Models\Forum');
    }

}
