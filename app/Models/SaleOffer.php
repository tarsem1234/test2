<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SaleOffer extends Model
{
    use SoftDeletes;

    protected $table = 'sale_offers';

    public function property()
    {
        return $this->belongsTo(\App\Models\Property::class);
    }

    public function propertyConditional()
    {
        return $this->hasOne(\App\Models\PropertyConditionalData::class, 'offer_id', 'id');
    }

    public function property_owner_user()
    {
        return $this->belongsTo(\App\Models\Access\User\User::class, 'owner_id');
    }

    public function seller()
    {
        return $this->belongsTo(\App\Models\Access\User\User::class, 'owner_id');
    }

    public function property_sender_user()
    {
        return $this->belongsTo(\App\Models\Access\User\User::class, 'sender_id');
    }

    public function buyer()
    {
        return $this->belongsTo(\App\Models\Access\User\User::class, 'sender_id');
    }

    public function sale_counter_offers()
    {
        return $this->hasMany(\App\Models\CounterSaleOffer::class);
    }

    public function sellerQuestionnaire()
    {
        return $this->hasOne(\App\Models\SellerQuestionnaire::class, 'offer_id');
    }

    public function buyerQuestionnaire()
    {
        return $this->hasOne(\App\Models\BuyerQuestionnaire::class, 'offer_id');
    }

    public function saleAgreement()
    {
        return $this->hasOne(\App\Models\UpdateSaleAgreementBysellerContract::class, 'offer_id');
    }

    //    public function signature()
    //    {
    //        return $this->hasOne('App\Models\Signature','offer_id');
    //    }
    public function signatures()
    {
        return $this->hasMany(\App\Models\Signature::class, 'offer_id');
    }

    public function postClosing()
    {
        return $this->hasOne(\App\Models\QuestionSellerPostClosing::class, 'offer_id');
    }

    public function Userdata()
    {
        return $this->hasMany(\App\Models\Signature::class, 'offer_id');
    }

    public function userConditionalData()
    {
        return $this->hasMany(\App\Models\UsersConditionalData::class, 'offer_id');
    }

    public function userbuyerConditionalData()
    {
        return $this->hasMany(\App\Models\UsersConditionalData::class, 'user_id', 'sender_id');
    }

    public function usersenderConditionalData()
    {
        return $this->hasMany(\App\Models\UsersConditionalData::class, 'user_id', 'owner_id');
    }
}
