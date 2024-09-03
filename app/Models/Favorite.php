<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Favorite extends Model
{
    use SoftDeletes;

    protected $table = 'favorites';

    public function property()
    {
        return $this->belongsTo('App\Models\Property');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\Access\User\User');
    }
}
