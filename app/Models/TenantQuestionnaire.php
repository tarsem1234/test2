<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TenantQuestionnaire extends Model
{
    use SoftDeletes;

    protected $table = 'questions_tenant';

    public function saleOffer()
    {
        return $this->belongsTo('App\Models\SaleOffer', 'offer_id');
    }

    public function rentOffer()
    {
        return $this->belongsTo('App\Models\RentOffer');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\Access\User\User');
    }
}
