<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{

    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = "services";

    public function industry()
    {
        return $this->belongsTo('App\Models\Industry');
    }
}