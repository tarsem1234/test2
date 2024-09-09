<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RentAgreement extends Model
{
    use SoftDeletes;

    protected $table = 'rent_agreement';

    public function offer()
    {
        return $this->belongsTo(\App\Models\RentOffer::class, 'rent_offer_id');
    }

    public function propertyContractUserAddresses()
    {
        return $this->hasMany(\App\Models\PropertyContractUserAddresses::class, 'rent_agreement_id');
    }
}
