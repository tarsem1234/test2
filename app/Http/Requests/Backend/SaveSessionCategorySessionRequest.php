<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class SaveSessionCategorySessionRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
'name'        => 'required|max:150',
'description' => 'required',
'points'      => 'required',
'questions'   => 'required',
];
    }
}
