<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class QuestionSellerPostClosing extends Model
{
    use SoftDeletes;

    protected $table = 'questions_seller_post_closing';

    public function saleOffer()
    {
        return $this->belongsTo(\App\Models\SaleOffer::class);
    }

    public function rentOffer()
    {
        return $this->belongsTo(\App\Models\RentOffer::class);
    }
}
