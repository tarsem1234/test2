<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;
    
    protected $table = "comments";
    
    public function blog() {
        return $this->belongsTo('App\Models\Blog');
    }

    public function user() {
        return $this->belongsTo('App\Models\Access\User\User');
    }
}
