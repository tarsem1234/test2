<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdditionalInformation extends Model
{

    use SoftDeletes;
    protected $table = "additional_information";

//    public function parent()
//    {
//        return $this->belongsTo('App\Models\AdditionalInformation', 'parent_id');
//    }

    public function children()
    {
        return $this->hasMany('App\Models\AdditionalInformation', 'parent_id'); //get all subs. NOT RECURSIVE
    }

    public function parent()
    {
        return $this->belongsTo('App\Models\AdditionalInformation', 'parent_id'); //get all subs. NOT RECURSIVE
    }

    public function property()
    {
        return $this->belongsToMany('App\Models\Property')->withPivot('property_id');
    }
}