@extends ('frontend.layouts.app')
@section ('title', ('Recieved Offer'))
@section('after-styles')
{{ Html::style(mix('css/dashboard.css')) }}
<style>
    .child_spacing {
        padding-left: 28px !important;
    }
    td.na_prop p span {
        background-color: #b0c7ce;
    }
    td.na_prop p {
        color: #b0c7ce;
    }
    tr.parent_last_child {
        margin-bottom: 20px;
    }
    #mymessagesviewreply-box\ date-box {
    float: left;
    width: 100%;
    margin-bottom: 40px;
   }
</style>
@endsection
@section('content')
<div class="offers-page"> 
    <div class="container">
        <div class="row">
        <div class="col-lg-12">
        <div> <h4>Received From : {{!empty($offer->tenant) ? getFullName($offer->tenant):'NA'}}</h4></div>
            <div id="mymessagesviewreply-box">
                <div>
                    <table class="summary">
                        <tbody>
                            <tr>
                                <?php if (count($offer->rent_counter_offers) > 0) { ?>
                                    <td><p><strong>Tentative Rent/Month Price Offer :</strong> <span class="money">{{round($offer->rent_counter_offers->first()->counter_offer_price)}}</span></p></td>
                                <?php } else { ?>
                                    <td><p><strong>Tentative Rent/Month Price Offer : </strong> <span class="money">{{round($offer->rent_price)??"NA" }} </span></p></td>
                                <?php } ?>

                            </tr>
                            <tr>
                                <td><p><strong>Listing Type :</strong> <span>{{  config('constant.property_type.'. $offer->property->property_type)??"NA" }}</span></p></td>
                            </tr>

                            <tr>
                                <td><p><strong>Name :</strong><span class="mail-text"> {{ $offer->name??"NA" }}</span> </p></td>
                            </tr>
                            <tr>
                                <td><p><strong>Email :</strong><span class="mail-text"> {{ $offer->email??"NA" }}</span> </p></td>
                            </tr>
                            <tr>
                                <td><p><strong>Phone :</strong> <span>{{  $offer->phone??"NA" }}</span></p></td>
                            </tr>
                            <tr>
                                <td><p><strong>Lease Term: </strong>
                                        <?php
                                        if (isset($offer) && $offer->lease_term) {
                                            $leaseTerms = explode(',', $offer->lease_term);
                                            foreach ($leaseTerms as $leaseTerm) {
                                                ?>
                                                <span>{{ $leaseTerm }}</span>
                                                <?php
                                            }
                                        } else {
                                            echo "<span>NA</span>";
                                        }
                                        ?>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td><p><strong>Desired Date of Occupancy:</strong> <span>{{  $offer->date_of_occupancy??"NA" }}</span></p></td>
                            </tr>
                            <tr>
                                <td><p><strong>Total months to lease the property :</strong> <span>{{  isset($offer->month_count)?(($offer->month_count == 12) ? '12 +':$offer->month_count ):"NA" }}</span></p></td>
                            </tr>
                            <tr>
                                <td><p><strong>Have Pet(s)? :</strong> <span>{{  config('constant.pets_welcome.'. $offer->pets_welcome)??"NA" }}</span></p></td>
                            </tr>
                            <tr>
                                <td class="child_spacing {{ (isset($offer->pets_type)) ? '' : 'na_prop' }}" colspan="2">
                                    <p><strong>Pet Type(s) :</strong>
                                        <?php
                                        if (isset($offer) && $offer->pets_type) {
                                            $pets = explode(',', $offer->pets_type);
                                            foreach ($pets as $pet) {
                                                ?>
                                                <span>{{ $pet }}</span>
                                                <?php
                                            }
                                        } else {
                                            echo "<span>NA</span>";
                                        }
                                        ?>
                                    </p>
                                </td>
                            </tr>
                            <tr class="parent_last_child">
                                <td class="child_spacing {{ (isset($offer->pet_other_explanation)) ? '' : 'na_prop' }}" colspan="2"><p><strong>Other Details :</strong> <span>{{  $offer->pet_other_explanation??"NA" }}</span></p></td>
                            </tr>
                            <tr>
                                <td> <p><strong>Status :</strong> <span>{{  ucwords(str_replace('_',' ',config('constant.offer_status.'.$offer->status))) }}</span></p></td>
                            </tr>
                            <tr>
                                <td><p><strong>Offer Date :</strong> <span>{{date("d F Y", strtotime($offer->created_at))}}</span></p></td>
                            </tr>
                        </tbody>
                    </table>
                    @if($buisnessuserPage == TRUE)
                    <div class="buyer-details-business"> <h4>Tenant's Details</h4></div>
                    <div id="mymessagesviewreply-box">
                        <table class="summary">
                            <tbody>
                                <tr>
                                    <td><p><strong>Buyer's Name : </strong> <span>{{ getFullName($offer->tenant)??"NA" }}</span></p></td>
                                </tr>
                                <tr>
                                    <td><p><strong>Buyer's Email : </strong> <span>{{ $offer->tenant->email??"NA" }}</span></p></td>
                                </tr>
                                <tr>
                                    <td><p><strong>Buyer's Phone : </strong> <span>{{ $offer->tenant->phone_no??"NA" }}</span></p></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    @endif
                    <div  class="bottom_btns pull-right mr-top">
                        @if($signButton == TRUE && $offer->status!=config('constant.inverse_rent_offer_status.user_deleted'))
                        <a href="{{route('frontend.sdSummaryKeyTermsForLandlord')}}"> <button type="button" class="btn btn-default related_listing mar-left">Sign Documents</button></a>
                        @endif

                        @if(!empty($message) && $offer->status!=config('constant.inverse_rent_offer_status.user_deleted'))
                        <p class="pull-left text-danger offer-wait-msg">{{$message}}</p>
                        @endif

                        @if($showContractToolsButton == TRUE && $offer->status!=config('constant.inverse_rent_offer_status.user_deleted'))
                        <a href="{{route('frontend.questionsToLandlord')}}"> <button type="button" class="btn btn-default related_listing mar-left">Contract Tools</button></a>
                        @endif

                        @if($downloadButton == TRUE)
                        <a href="{{route('frontend.sentDocumentDetailsRent',['offer_id'=> $offer->id,'type'=> $offer->property->property_type])}}"> <button type="button" class="btn btn-default related_listing mar-left">Download Document</button></a>
                        @endif
                        @if($offer->status==config('constant.inverse_rent_offer_status.user_deleted'))
                        <p class="pull-left text-danger offer-wait-msg">You can't continue the offer , As one of the party in this offer has deleted/deactivated their account.</p>
                        @endif

                        <a href="{{route('frontend.recieved.offers')}}" type="button" class="btn btn-default submit mar-left">Back</a>
                        <a href="{{route('frontend.propertyDetails',$offer->property->id)}}" type="button" class="btn btn-default related_listing mar-left">Related Listing</a>

                        @if ($showOfferAceeptRejectButton == TRUE && $offer->status!=config('constant.inverse_rent_offer_status.user_deleted')) 

                        <button type="button" data-toggle="modal" data-target="#confirm-accept-{{$offer->id}}" class="btn btn-default mar-left">Accept</button>

                        <div class="row modal fade accept-modal" id="confirm-accept-{{$offer->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog accept-modal-text">
                                <div class="modal-content nested-div">
                                    <div class="modal-header">
                                        <h2 class="modal-title">Offer Acceptance Confirmation</h2>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12" id="favdiv">
                                                <form class="form-horizontal usersignup-form" role="form" name="confirmfav" id="lease-agreement-form-login-favorite-confirm" method="post">
                                                    <div id="usersignip-form">
                                                        <div class="form-group">
                                                            <div class="col-sm-12 modal-body-content">
                                                                <h4>Congratulations on your offer!</h4>
                                                                <p>Before accepting this offer, it is very important that you verify a few important items.</p>
                                                                <h4>In the "My Account" => "My Listings" => "For Sale" section of your menu options, please ensure the following items are correct:</h4>
                                                                <ul>
                                                                    <li>Address</li>
                                                                    <li>School Districts</li>
                                                                    <li>Build Year</li>
                                                                    <li>Amenities</li>
                                                                    <li>Home-Owner Associations</li>
                                                                    <li>Descriptions</li>
                                                                </ul>
                                                                <h4>In the "My Account" => "Edit Profile" section of your profile page, please also verify the following item(s):</h4>
                                                                <ul>
                                                                    <li>AddressFull (Legal) Name (Very Important!)</li>
                                                                    <li>Phone Number</li>
                                                                    <li>Address</li>
                                                                    <li>Amenities</li>
                                                                    <li>Home-Owner Associations</li>
                                                                    <li>Descriptions</li>
                                                                </ul>
                                                                <p class="font-weight">Upon accepting this offer, you WILL NOT be able to modify any listing information on this property!</p>
                                                                <p>Would you like to accept this offer? </p>
                                                                <div class="btns-green-blue btns-text-align-right">
                                                                    <a href="{{route('frontend.accept.offer',[$offer->id,$offer->property->property_type])}}" class="btn div-message btn-green button" id="accept-btn">Confirm</a>
                                                                    <input type="button" class="btn btn-blue button" name="cancel" id="cancel-accept" data-dismiss="modal" value="Cancel">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="button" data-toggle="modal" data-target="#confirm-reject-{{$offer->id}}" class="btn btn-default div-message mar-left">Reject</button>
                        <div class="modal fade" id="confirm-reject-{{$offer->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="err" id="add_err_fav_con"></div>
                                            <div class="col-md-12 col-sm-12"id="favdiv">
                                                <form class="form-horizontal usersignup-form" role="form" name="confirmfav" id="lease-agreement-form-login-favorite-confirm" method="post">
                                                    <div id="usersignip-form">
                                                        <div class="form-group text-center">
                                                            <div>
                                                                <p>Are you sure you want to reject this offer?</p>
                                                                <a href="{{route('frontend.reject.offer',[$offer->id,$offer->property->property_type])}}" class="btn btn-default"">Confirm</a>
                                                                <input type="button" class="btn btn-default" name="cancel" id="inputbutton" data-dismiss="modal" value="Cancel">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" id="counter-offer" class="btn btn-default mar-left">Counter Offer</button>
                    </div>
                    <div id="flip_counter-offer" style="display:none;">
                        {{ Form::open(['url'=>route('frontend.counter.offer'), 'id'=>"make-an-offer-form", 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post']) }}
                        <input type="hidden" class="form-control" name="property_type" value="{{ $offer->property->property_type??"" }}">
                        <input type="hidden" class="form-control" name="offer_id" value="{{ $offer->id??"" }}">
                        <div class="form-group">
                            <div class="col-lg-12">
                                <label for="" class="control-label">Counter Offer Price</label>
                                <input type="number" id="offer_price" class="form-control" name="offer_price" data-rule-required="true" data-rule-number="true" data-msg-number="Please enter valid price"  value="" placeholder="Enter your counter offer price" aria-required="true">
                                <div  class="bottom_btns col-lg-12">
                                    <div>
                                        <div class="form-group pull-right">
                                            <input type="submit" class="btn btn-default" name="submit" id="inputbutton" value="counter">
                                            <button type="button" id="toggleclose" class="btn btn-default">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{Form::close()}}
                    </div>
                    @endif
                    @if (isset($offer->rent_counter_offers) && count($offer->rent_counter_offers) > 0)
                    <div class="" id="mymessagesviewreply-box date-box">

                        <table>
                            <tbody>
                                <?php
                                foreach ($offer->rent_counter_offers as $key => $off) {
                                    ?>
                                    <tr>
                                        <td>
                                            <p><strong>COUNTER OFFER PRICE :</strong><span class="money">{{round($off->counter_offer_price)??""}}</span>
                                                <span class="date">
                                                    {{date("d F Y", strtotime($off->created_at))}}
                                                </span>
                                                @if($off->user_id == Auth::id())
                                                <span class="pull-right">
                                                    Sent by you
                                                </span>
                                                @endif

                                                <span > {{config('constant.counter_offer_status')[$off->status] }}</span>
                                            </p>
                                            @if($showNegotiationButton == TRUE && $key == 0)
                                            <div  class="bottom_btns" style="text-align: right;">
                                                <a href="{{route('frontend.accept.counterOffer',[$offer->id,$offer->property->property_type])}}"> <button type="button" class="btn btn-default">Accept</button></a>
                                                <a href="{{route('frontend.reject.counterOffer',[$offer->id,$offer->property->property_type])}}"> <button type="button" class="btn btn-default related_listing">Reject</button></a>
                                                <button type="button" id="buyer_decline_counter" class="btn btn-default related_listing">Decline & Counter</button>
                                            </div>

                                            <div id="buyer_counter-offer" style="display:none">
                                                {{ Form::open(['url'=>route('frontend.counter.offer'), 'id'=>"make-an-offer-form", 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post']) }}
                                                <input type="hidden" class="form-control" name="property_type" value="{{ $offer->property->property_type??"" }}">
                                                <input type="hidden" class="form-control" name="offer_id" value="{{ $offer->id??"" }}">
                                                <div class="form-group">
                                                    <label for="" class="control-label">Counter Offer Price</label>
                                                    <div class="col-md-12">
                                                        <input type="number" id="offer_price" class="form-control" name="offer_price" data-rule-required="true" data-rule-number="true" data-msg-number="Please enter valid price" value="" placeholder="Enter your counter offer price" aria-required="true">
                                                        <div class="bottom_btns col-md-12">
                                                            <div class="form-group">
                                                                <div class="pull-right">
                                                                    <input type="submit" class="btn btn-default" name="submit" id="inputbutton" value="counter">
                                                                    <button type="button" id="toggleclose" class="btn btn-default">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                            @endif
                                        </td>
                                    </tr>
                                <?php }
                                ?>
<!--                                <tr>
                                    <td>
                                        <p><strong>COUNTER OFFER PRICE  :</strong> {{ $offer->tentative_offer_price??"" }}
                                            <span class="date">
                                                {{date("d F Y", strtotime($offer->created_at))}}
                                            </span>
                                            @if($offer->sender_id == Auth::id())
                                            <span class="pull-right">
                                                Sent by you
                                            </span>
                                            @endif

                                            <span > Counter</span>
                                        </p>
                                    </td>
                                </tr>-->

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            @endif
        </div>
        </div><!--</row>-->
    </div><!--</container>-->
</div><!--</offers-page>-->
@endsection
@section('after-scripts')
<script>
    $(document).ready(function () {
        $('#counter-offer').click(function () {
            $('#flip_counter-offer').toggle();
            if($('#flip_counter-offer').is(":visible")){
 $('html,body').animate({scrollTop: $('#flip_counter-offer').offset().top});
           }});
        $('#buyer_decline_counter').click(function () {
            $('#buyer_counter-offer').toggle();
        });
        $('#toggleclose').click(function () {
        $('#offer_price').val('');
        $('#buyer_counter-offer').hide();
        });
    });
      $('.money').mask('000,000,000,000,000', {reverse: true});
</script>
@endsection   