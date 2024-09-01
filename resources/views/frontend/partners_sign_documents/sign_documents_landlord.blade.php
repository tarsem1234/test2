@section('content')
@extends ('frontend.layouts.app')
@section ('title', ('Sign Documents Landlord')) 
@section('after-styles')
{{ Html::style(mix('css/dashboard.css')) }}
<style>#sign-documents{ font-weight: bold;color: #000;}</style>
@endsection 
@section('content')
<div class="forum-page signer-page dashboard-page associates profile-view">     
    <div class="container">
        <div class="row content">
            @include('frontend.includes.sidebar')
            <div class="col-md-9 col-sm-8">
                <div class="right-dashboard-div">
                    <div class="profile right-dashboard-div-text">
                        <div class="row">  
                            <div class="col-md-12">
                                <h4 class="pull-left">Sign Documents</h4>                          
                            </div>
                        </div>
                         <div class="table-responsive">
                                <table class="table table-striped ">
                                    <thead>
                                        <tr>
                                        <th>Primary Landlord</th>
                                        <th>Offer To</th>
                                        <th>Listing Type</th>
                                        <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(isset($landlords) && count($landlords)>0){
                                           foreach($landlords as $landlord){
//                                            $exploded = explode(',',$landlord->partners);
//                                            foreach($exploded as $explode){
//                                            if($explode == Auth::id()){
                                                ?>
                                            <tr>
                                                <td>{{getFullName($landlord->rentOffer->tenant)}}</td>
                                                <td>{{getFullName($landlord->rentOffer->landlord)}}</td>
                                                <td>{{config('constant.property_type.'.$landlord->rentOffer->property->property_type)}}</td>
                                                 @if($landlord->rentOffer->owner_id == Auth::id())
                                                <td>
                                                    {{ Form::open(['route' => 'frontend.recieved.view.offer.rent', 'method'=>'get', 'class' => 'form-horizontal','id'=>'contractToolPageForm']) }}
                                                    <input type="hidden" name="offer_id" value="{{ $landlord->rentOffer->id }}">
                                                    <input type="hidden" name="type" value="{{ (isset($landlord->rentOffer->property) && $landlord->rentOffer->property) ? config('constant.property_type.'.$landlord->rentOffer->property->property_type) :"" }}">
                                                    <input type="hidden" name="property_id" value="{{ $landlord->rentOffer->property->id??"" }}">
                                                    <input type="hidden" name="owner_id" value="{{ $landlord->rentOffer->property_owner_user->id }}">
                                                    <a class="" style="cursor:pointer;" type="submit" onclick="signDocumentPage()">View &amp; Sign Documents </a>
                                                    {{ Form::close() }}
                                                </td>
                                                @else
                                                <td class="blue-text"><a href="{{route('frontend.signOffersRentLandlordPartner',$landlord->id)}}">View &amp; Sign Documents</a></td>
                                                @endif
                                                </td>
                                            </tr>
                                        <?php
//                                           } }
                                        } }  else { ?>
                                        <tr>
                                            <td>No Document Found.</td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table><!--table-->
                            </div><!-- table-responsive -->
                    </div><!-- right-dashboard-div-text -->
                </div><!-- right-dashboard-div -->
            </div><!-- col-md-9 -->
        </div><!-- content -->
    </div><!-- container -->
</div><!-- dashboard-page -->
@endsection
@section('after-scripts')
<script>
    function signDocumentPage(){
        $('#contractToolPageForm').submit();
    };

</script>
@endsection   
