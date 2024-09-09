<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;

class CategorySessionQuestionOption extends Model
{
    protected $table = 'category_session_question_options';

    public function sessionQuestion()
    {
        return $this->belongsTo(\App\Models\Backend\CategorySessionQuestion::class);
    }
}
