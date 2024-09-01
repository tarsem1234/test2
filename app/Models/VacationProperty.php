<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VacationProperty extends Model {

    use SoftDeletes;

    protected $table = "vacation_properties";

    public function images() {
        return $this->hasMany('App\Models\VacationImage');
    }

    public function availableWeeks() {
        return $this->hasMany('App\Models\VacationAvailableCheckin');
    }

    public function user() {
        return $this->belongsTo('App\Models\Access\User\User');
    }

    public function availabilities() {
        return $this->hasMany(VacationPropertyAvailability::class);
    }

}
