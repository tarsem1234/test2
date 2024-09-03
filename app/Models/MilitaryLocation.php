<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MilitaryLocation extends Model
{
    protected $table = 'military_bases';

    public function zipCode()
    {
        return $this->hasOne('App\Models\ZipCode', 'id', 'zipcode_id');
    }
}
