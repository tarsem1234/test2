<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{

    use SoftDeletes;
    protected $table = 'categories';

    public function sessions()
    {
        return $this->hasMany('App\Models\Backend\CategorySession');
    }
}