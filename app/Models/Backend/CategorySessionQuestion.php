<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;

class CategorySessionQuestion extends Model
{
    protected $table = 'category_session_questions';

    public function session()
    {
        return $this->belongsTo('App\Models\Backend\CategorySession');
    }

    public function options()
    {
        return $this->hasMany('App\Models\Backend\CategorySessionQuestionOption');
    }
}
