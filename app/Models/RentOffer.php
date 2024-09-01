<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RentOffer extends Model
{

    use SoftDeletes;

    protected $table = "rent_offers";

    public function property()
    {
        return $this->belongsTo('App\Models\Property');
    }

    public function property_owner_user()
    {
        return $this->belongsTo('App\Models\Access\User\User', 'owner_id');
    }
      public function propertyConditional()
    {
        return $this->hasOne('App\Models\PropertyConditionalData','offer_id','id');
    }

    public function sent_offer_user()
    {
        return $this->belongsTo('App\Models\Access\User\User', 'buyer_id');
    }

    public function landlord()
    {
        return $this->belongsTo('App\Models\Access\User\User', 'owner_id');
    }

    public function tenant()
    {
        return $this->belongsTo('App\Models\Access\User\User', 'buyer_id');
    }

    public function rent_counter_offers()
    {
        return $this->hasMany('App\Models\CounterRentOffer', 'rent_offer_id');
    }

    public function landlordQuestionnaire()
    {
        return $this->hasOne('App\Models\LandlordQuestionnaire', 'offer_id');
    }

    public function tenantQuestionnaire()
    {
        return $this->hasOne('App\Models\TenantQuestionnaire', 'rent_offer_id');
    }

    public function rentAgreement()
    {
        return $this->hasOne('App\Models\RentAgreement', 'rent_offer_id');
    }

    public function rentSignatures()
    {
        return $this->hasMany('App\Models\RentSignature', 'offer_id');
    }

}
