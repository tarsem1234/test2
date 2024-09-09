<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model
{
    use SoftDeletes;

    protected $table = 'properties';

    public function architechture()
    {
        return $this->hasOne(\App\Models\PropertyArchitecture::class, 'property_id');
    }

    public function images()
    {
        return $this->hasMany(\App\Models\PropertyImage::class, 'property_id');
    }

    public function latestImage()
    {
        return $this->hasOne(\App\Models\PropertyImage::class, 'property_id')->latest();
    }

    public function additional_information()
    {
        return $this->belongsToMany(\App\Models\AdditionalInformation::class)->withPivot('property_id', 'additional_information_id');
    }

    public function additional_property()
    {
        return $this->belongsToMany(\App\Models\additionalInformationProperty::class)->withPivot('property_id', 'additional_information_id');
    }

    public function city()
    {
        return $this->hasOne(\App\Models\City::class);
    }

    public function offers()
    {
        return $this->hasMany('App\Models\Offer');
    }

    public function rentOffer()
    {
        return $this->hasMany(\App\Models\RentOffer::class);
    }

    public function saleOffer()
    {
        return $this->hasMany(\App\Models\SaleOffer::class);
    }

    public function favorites()
    {
        return $this->hasMany(\App\Models\Favorite::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\Access\User\User::class);
    }

    public function disclosure()
    {
        return $this->hasOne(\App\Models\PropertyConditionDisclaimer::class);
    }

    public function leadBasedPaintHazards()
    {
        return $this->hasOne(\App\Models\LeadBasedPaintHazards::class);
    }

    public function propertyConditionDisclaimer()
    {
        return $this->hasOne(\App\Models\PropertyConditionDisclaimer::class, 'property_id');
    }

    public function availability()
    {
        return $this->hasMany(PropertyAvailability::class);
    }
}
