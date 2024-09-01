<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RentContractToolController extends Controller
{
    public function contractToolsRent()
    {

        return view('frontend.contract_tools.rent.contract_tools_rent');
    }
    public function questionsToLandlord()
    {

        return view('frontend.contract_tools.rent.questions_to_landlord');
    }
    public function addSignersContractRentLandlord()
    {
        return view('frontend.contract_tools.rent.add-signers-contract-rent-landlord');
    }
    public function thankYouToLandlordForAnswer()
    {
        return view('frontend.contract_tools.rent.thank_you_to_landlord_for_answer');
    }
    public function disclosuresRentContractTool()
    {
        return view('frontend.contract_tools.rent.disclosures_rent_contract_tool');
    }
    public function thankyouDiscloserTool()
    {
        return view('frontend.contract_tools.rent.thankyou_discloser_tool');
    }
    public function leaseAgreement()
    {
        return view('frontend.contract_tools.rent.lease_agreement');
    }
    public function thankyouLeaseAgreementLandlord()
    {
        return view('frontend.contract_tools.rent.thankyou_lease_agreement_landlord');
    }


    // rent buyer
    public function questionSetForTenant()
    {
        return view('frontend.contract_tools.rent.buyer.question_set_for_tenant');
    }
    public function addSignersContractRentTenant()
    {
        return view('frontend.contract_tools.rent.buyer.add_signers_contract_rent_tenant');
    }
    public function summaryKeyTermsForTenant()
    {
        return view('frontend.contract_tools.rent.buyer.summary_key_terms_for_tenant');
    }
    public function thankYouForReviewSummaryKeyTerms()
    {
        return view('frontend.contract_tools.rent.buyer.thank_you_for_review_summary_key_terms');
    }
    public function disclosuresRentContractToolReviewTenant()
    {
        return view('frontend.contract_tools.rent.buyer.disclosures_rent_contract_tool_review_tenant');
    }
    public function thankyouDiscloserToolTenant()
    {
        return view('frontend.contract_tools.rent.buyer.thankyou_discloser_tool_tenant');
    }
    public function leaseAgreementReviewTenant()
    {
        return view('frontend.contract_tools.rent.buyer.lease_agreement_review_tenant');
    }
    public function thankyouLeaseAgreementTenant()
    {
        return view('frontend.contract_tools.rent.buyer.thankyou_lease_agreement_tenant');
    }

}
