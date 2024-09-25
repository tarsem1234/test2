<?php

namespace App\Http\Requests\Frontend\ContractTools;

use Illuminate\Foundation\Http\FormRequest;

class SdThankyouForReviewSummaryKeyTermsLandlordContractToolLandlordRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return ['agree' => [
                'required',
            ],];
    }
}
