@extends ('frontend.layouts.app')
@section ('title', ('Thankyou Purchase Agreement By Buyer'))
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
                        <h2>Congratulation</h2>
                    </div>
                    <div class="para-text">
                        <h5 class="first-child">Excellent, you have completed your review!</h5>
                        <p>The next step is to electronically sign your documents - Are you Ready?</p>
                        <p>Not ready quite yet? - You may review & adjust (as needed) your documents prior to signing!</p>  
                        <p><a href="{{route('frontend.sdSummaryKeyTermsForBuyer')}}">Ready? Sign Here!</a></p>
                        <p>Keep in mind that timing is important & keep your seller up to date with good communication.</p>
                        <p><a href="{{route('frontend.sent.offers','#Sale')}}">Not Ready? Continue Reviews Here!</a></p>
                    </div>
                </div>
            </div>
        </div><!--</col>-->
    </div><!--</row>-->
</div><!--</contract-tools-seller-common>-->
@endsection


