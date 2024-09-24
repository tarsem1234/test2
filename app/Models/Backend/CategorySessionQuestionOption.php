<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CategorySessionQuestionOption extends Model
{
    protected $table = 'category_session_question_options';

    public function sessionQuestion(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Backend\CategorySessionQuestion::class);
    }
}
