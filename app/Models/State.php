<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = 'states';

    public function documents(): HasMany
    {
        return $this->hasMany(\App\Models\DocumentListing::class);
    }
}
