@extends ('frontend.layouts.app')
@section ('title', ('Sd Advisory To Buyers and Sellers Thank You Buyer'))
@section('after-styles')
<link type="text/css" rel="stylesheet" href="{{ asset(mix('css/contract-tools-buyer.css')) }}" media="all"> 
@endsection
@section('content')
<div class="container purchase-sale-agreement-review contract-tools-seller-common">
    <div class="row">
        <div class=""> 
            <div class="sidebar">
                @include('frontend.includes.sidebar')
            </div>
            <div class="col-sm-9">
                <div class="nested-div">
                    <div class="heading-text">
                  <h2>Signatures Step 2 of 6: Property Condition Disclaimer</h2>
               </div>
               <div class="para-text">
                  <p class="first-child">The Property Condition Disclaimer form is a required disclosure.</p>
                  <ul>
                     <li>Please review this form carefully to understand the condition of the property as presented by the seller(s).</li>
                     <li> Known Defects on the property should be clearly disclosed.</li>
                     <li> Consult with your closing attorney to discover if any other disclosures should be provided to you [The Buyer(s)].</li>
                  </ul>
                  <p class="last-child">
                      <b>FREEZYLIST is not responsible for inadequate disclosures. State disclosure requirements are not standardized and may vary; please consult your closing attorney to ensure you are in compliance with all required and recommended disclosure requirements.</b>  
                  </p>
               </div>
                    <div class="btns-green-blue">
                        <a href="{{route('frontend.sdDisclosureByBuyerUpdate')}}" class="button btn btn-blue">Next</a>
                    </div><!--</btns-green-blue>-->
                </div>
            </div>
        </div><!--</col>-->
    </div><!--</row>-->
</div><!--</contract-tools-seller-common>-->
@endsection
