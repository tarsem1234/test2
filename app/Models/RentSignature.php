<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RentSignature extends Model
{

    use SoftDeletes;
    protected $table = "rent_signatures";

//    public function signer_user()
//    {
//        return $this->belongsTo('App\Models\Access\User\User','from_user_id');
//    }
}