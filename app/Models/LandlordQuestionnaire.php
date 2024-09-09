<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LandlordQuestionnaire extends Model
{
    use SoftDeletes;

    protected $table = 'questions_landlord';

    public function saleOffer()
    {
        return $this->belongsTo(\App\Models\SaleOffer::class, 'offer_id');
    }

    public function rentOffer()
    {
        return $this->belongsTo(\App\Models\RentOffer::class, 'offer_id');
    }

    public function user()
    {
        return $this->belongsTo(\App\Models\Access\User\User::class, 'user_id');
    }
}
