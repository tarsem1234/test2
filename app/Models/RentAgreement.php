<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RentAgreement extends Model
{

    use SoftDeletes;
    protected $table = "rent_agreement";

    public function offer()
    {
        return $this->belongsTo('App\Models\RentOffer', 'rent_offer_id');
    }

    public function propertyContractUserAddresses()
    {
        return $this->hasMany('App\Models\PropertyContractUserAddresses','rent_agreement_id');
    }
}