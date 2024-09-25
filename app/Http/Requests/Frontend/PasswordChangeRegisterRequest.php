<?php

namespace App\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class PasswordChangeRegisterRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
'old_password' => [
                'required',
            ],
'password'     => [
                'required',
                'min:6',
                'confirmed',
            ],
];
    }
}
