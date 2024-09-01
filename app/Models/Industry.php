<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Industry extends Model
{

    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = "industries";

    public function services()
    {
        return $this->hasMany('App\Models\Service');
    }

    public function business_profile()
    {
        return $this->belongsTo('App\Models\BusinessProfile');
    }
}