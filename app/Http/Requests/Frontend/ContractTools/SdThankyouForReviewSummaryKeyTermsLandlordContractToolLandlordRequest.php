<?php

namespace App\Http\Requests\Frontend\ContractTools;

use Illuminate\Foundation\Http\FormRequest;

class SdThankyouForReviewSummaryKeyTermsLandlordContractToolLandlordRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return ['agree' => [
                'required',
            ],];
    }
}
