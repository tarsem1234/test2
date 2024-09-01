@extends ('frontend.layouts.app')
@section ('title', ('Contract Tools Rent'))
@section('after-styles')
{{ Html::style(mix('css/contract_tools.css')) }} 
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
                  <h2>Thank you for accepting the offer</h2>
               </div>
               <div class="para-text">
                  <p class="first-child">Congratulations! You have found a tenant for your property! </p>
                  <p>So, what's next...?</p>
                  <p>Here at FREEZYLIST, we made you a promise to keep things simple, and we keep our promises! We provide the tools and guidance to help you seamlessly prepare your contracts for signing! All you need to do is answer a few simple questions, and we will handle the rest!</p>
                  <p><b>To top it off, we have also created a secure signing process that places you and your tenant under contract securely and legally all here on the site!</b></p>
                  <p>We highly recommend using our application to prepare your contracts, as our fees are nominal and the results are amazing! There is absolutely NO RISK to you!</p>
                  <p>That being said, we want to help either way! If you prefer, we will provide you with our templates free of charge- just print and prepare. (Please visit our Document Portal for our contract templates)</p>
                  <p>Would you like to use our proprietary contract tools? (Recommended)</p>

               </div>
               <div class="btns-green-blue">
                  <a href="{{route('frontend.questionsToLandlord')}}" class="btn btn-green">Yes</a>
                  <a href="{{route('frontend.documentPortal')}}" class="btn btn-blue">No</a>
               </div>
            </div>
         </div>
      </div> 
   </div>
</div>

@endsection