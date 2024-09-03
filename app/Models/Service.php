<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'services';

    public function industry()
    {
        return $this->belongsTo('App\Models\Industry');
    }
}
