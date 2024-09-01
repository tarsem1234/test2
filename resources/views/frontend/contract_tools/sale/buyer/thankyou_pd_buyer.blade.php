@extends ('frontend.layouts.app')
@section ('title', ('Thankyou Purchase Agreement By Buyer'))
@section('after-styles')
{{ Html::style(mix('css/contract-tools-buyer.css')) }} 
@endsection
@section('content')
<div class="container purchase-sale-agreement-review contract-tools-seller-common dis-que">
    <div class="row">
        <div class=""> 
            <div class="sidebar">
                @include('frontend.includes.sidebar')
            </div>
            <div class="col-md-9 col-sm-8">
                <div class="nested-div register-page">
                    <div class="heading-text">
                        <h2> Step 4 of 6: VA/FHA Loan Addendum</h2>
                    </div>
                    <div class="para-text">
                        <p class="first-child">You are getting closer, keep going!</p>
                        <p>The following form [VA/FHA Loan Addendum] is required if the buyer will be using a VA/FHA insured mortgage loan.</p>
                        <ul>
                            <li> We have included the VA/FHA Loan Addendum , as you identified that you may obtain a VA/FHA loan.</li>
                            <li>We have populated the information automatically for your convenience- Please ensure the following information is correct.</li>
                        </ul>
                    </div>
                    <div class="btns-green-blue">
                        <a href="{{route('frontend.vaFhaloanAddendumByBuyer')}}" class="btn btn-blue">Next</a>
                    </div><!--</btns-green-blue>-->
                </div>
            </div>
        </div><!--</col>-->
    </div><!--</row>-->
</div><!--</contract-tools-seller-common>-->
@endsection
