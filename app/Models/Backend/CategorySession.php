<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategorySession extends Model
{
    use SoftDeletes;

    protected $table = 'category_sessions';

    public function category()
    {
        return $this->belongsTo(\App\Models\Backend\Category::class);
    }

    public function questions()
    {
        return $this->hasMany(\App\Models\Backend\CategorySessionQuestion::class);
    }
}
