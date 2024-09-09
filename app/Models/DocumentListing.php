<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DocumentListing extends Model
{
    use SoftDeletes;

    protected $table = 'document_lists';

    public function state()
    {
        return $this->belongsTo(\App\Models\State::class, 'state_id');
    }
}
