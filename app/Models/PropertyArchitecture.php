<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PropertyArchitecture extends Model
{
    use SoftDeletes;

    protected $table = 'property_architectures';

    public function property()
    {
        return $this->belongsTo('App\Models\Property');
    }
}
