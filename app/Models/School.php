<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $table = "schools";

    public function district()
    {
        return $this->belongsTo('App\Models\SchoolDistrict','school_district');
    }
}