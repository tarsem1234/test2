<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VacationImage extends Model
{
    use SoftDeletes;
    protected $table = "vacation_images";

    public function vacation_property()
    {
        return $this->belongsTo('App\Models\VacationProperty');
    }
}