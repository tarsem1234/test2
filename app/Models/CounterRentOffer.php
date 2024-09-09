<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CounterRentOffer extends Model
{
    use SoftDeletes;

    protected $table = 'counter_rent_offers';

    public function offer()
    {
        return $this->belongsTo('App\Models\Offer');
    }

    public function property()
    {
        return $this->belongsTo('App\Models\Offer');
    }

    public function owner()
    {
        return $this->belongsTo(\App\Models\Access\User\User::class);
    }

    public function buyer()
    {
        return $this->belongsTo(\App\Models\Access\User\User::class);
    }
}
