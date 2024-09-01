<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PropertyConditionalData extends Model
{
    use SoftDeletes;
    protected $table = "property_conditional_data";
    //
    public function architechture() {
        return $this->hasOne('App\Models\PropertyArchitectureConditionalData', 'property_conditional_id');
    }
     public function disclosure() {
        return $this->hasOne('App\Models\PropertyDisclaimerConditionalData','property_conditional_id');
    }
//     public function propertyConditionDisclaimer() {
//        return $this->hasOne('App\Models\PropertyDisclaimerConditionalData', 'property_id');
//    }
}
