<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VacationPropertyAvailability extends Model
{
    protected $table = 'vacation_property_availabilities';

    protected $fillable = ['start_date'];

    public function property()
    {
        return $this->belongsTo(VacationProperty::class);
    }
}
