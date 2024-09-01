<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'industry' => 'required',
            'service' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'industry.required' => 'The Industry field is required.',
            'service.required' => 'The Service field is required.',
        ];
    }
}