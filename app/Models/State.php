<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = 'states';

    public function documents()
    {
        return $this->hasMany('App\Models\DocumentListing');
    }
}
