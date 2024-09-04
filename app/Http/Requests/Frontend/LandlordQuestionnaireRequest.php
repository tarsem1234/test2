<?php

namespace App\Http\Requests\Frontend;

use App\Http\Requests\Request;
use Illuminate\Validation\Rule;

class LandlordQuestionnaireRequest extends Request
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
        $sellerAware = [1, 2];
        $rules = [
            'security_deposit' => 'required',
            'pets_welcome' => [
                'required',
                Rule::in($sellerAware),
            ],
            //            'property_vacant_date' => 'required|date',
            'require_cosigner' => [
                'required',
                Rule::in($sellerAware),
            ],
            'joint_cowners' => [
                'required',
                Rule::in($sellerAware),
            ],
        ];
        if ($this->pets_welcome == config('constant.inve rse_yes_no.Yes')) {
            $rules += [
                'non_refundable_pet_deposit' => 'numeric',
            ];
        }
        if ($this->joint_cowners == config('constant.inverse_yes_no.Yes')) {
            $rules += [
                'select_email.*' => 'required|email',
            ];
        }

        return $rules;
    }

    public function messages()
    {
        return [];
    }

    //    public function all()
    //    {
    //        $data = parent::all();
    //
    //        return $data;
    //    }
}
