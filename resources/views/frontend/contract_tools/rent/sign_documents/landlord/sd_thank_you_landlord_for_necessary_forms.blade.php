@extends ('frontend.layouts.app')
@section ('title', ('Sd Thankyou You For Review Summary Key Terms Tenant'))
@section('after-styles')
{{ Html::style(mix('css/contract-tools-buyer.css')) }} 
@endsection
@section('content')
<div class="container purchase-sale-agreement-review contract-tools-seller-common">
    <div class="row">
        <div class=""> 
            <div class="sidebar">
                @include('frontend.includes.sidebar')
            </div>
            <div class="col-md-9 col-sm-8">
                <div class="nested-div">
                    <div class="heading-text">
                        <h2>Signatures Step 2 of 3: Property Condition Disclaimer</h2>
                    </div>
                    <div class="para-text">
                        <p class="first-child">Keep going, you're nearly there!</p>
                        <p>You may have also noticed you skipped a step - don't worry, we have customized your experience to meet your specific needs.</p>
                        <p>The Property Condition Disclaimer form is a required disclosure.</p>
                        <ul>
                            <li> Please review this form carefully to understand the condition of the property as presented by the landlord(s).</li>
                            <li>Known Defects on the property should be clearly disclosed.</li>
                        </ul>
                        <p><b>* FREEZYLIST is not responsible for inadequate disclosures. State disclosure requirements are not standardized and may vary; please consult your attorney to ensure compliance with all required and recommended disclosure requirements.* </b></p>
                    </div>
                    <div class="btns-green-blue">
                        <a href="{{route('frontend.sdDisclosuresRentLandlord')}}" class="btn btn-blue">Next</a>
                    </div><!--</btns-green-blue>-->
                </div>
            </div>
        </div><!--</col>-->
    </div><!--</row>-->
</div><!--</contract-tools-seller-common>-->
@endsection

