@extends ('frontend.layouts.app')
@section ('title', ('Sent Offers')) 
@section('after-styles') 
{{ Html::style(mix('css/dashboard.css')) }} 
<style>#Offer{ font-weight: bold; color: #000;}</style>
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
                            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                                <h4>Offers Sent By You</h4>
                            </div>
                        </div>
                        <div id="tabs"class="">
                            <ul  class="nav nav-pills">
                                <li class="active">
                                    <a  href="#Rent" data-toggle="tab">Rent</a>
                                </li>
                                <li><a href="#Sale" data-toggle="tab">Sale</a>
                                </li>
                            </ul>
                            <div class="tab-content clearfix">
                                <div class="tab-pane active" id="Rent">
                                    <div class="">
                                        <?php if($rentOffers->count()){ ?>
                                            <div class="table-responsive">
                                                <table class="table table-striped ">
                                                    <thead>
                                                        <tr>
                                                            <th>Offer To</th>
                                                            <th>Offer Price</th>
                                                            <th>Offer Date</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($rentOffers as $offer)
                                                        <tr>
                                                            <td>{{ getFullName($offer->property_owner_user) }}</td>
                                                             <?php if(count($offer->rent_counter_offers) > 0) { ?>
                                                            <td><span class="money"><?php echo round($offer->rent_counter_offers->first()->counter_offer_price) ?></span></td>
                                                            <?php } else { ?>
                                                            <td><span class="money">{{round($offer->rent_price)??"NA" }}</span></td>
                                                            <?php } ?>
                                                            <td>{{date("d F Y", strtotime($offer->created_at))}}</td>
                                                            <td class="approved">{{ ucwords(str_replace('_',' ',config('constant.offer_status.'.$offer->status)))}}</td>
                                                            <td>
                                                                {{ html()->form('GET', route('frontend.sent.view.offer.rent'))->class('form-horizontal')->open() }}
                                                                <input type="hidden" name="offer_id" value="{{ !empty($offer->id) ? $offer->id:'' }}">
                                                                <input type="hidden" name="type" value="{{ !empty($offer->property->property_type)? $offer->property->property_type :'' }}">
                                                                <input type="hidden" name="property_id" value="{{ !empty($offer->property->id) ? $offer->property->id:'' }}">
                                                                <input type="hidden" name="owner_id" value="{{ !empty($offer->property->user_id)? $offer->property->user_id:'' }}">
                                                                <button class="single-btn-offer view" type="submit">View &amp; Reply </button>
                                                                {{ html()->form()->close() }}
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table><!--table-->

                                            </div><!-- col-md-12 -->
                                            {{ $rentOffers->fragment('Rent')->links() }}
                                        <?php } else { ?>
                                            <h4 class="no-data">No Rent offer recieved</h4>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="tab-pane" id="Sale">
                                        <?php if ($saleOffers->count()) { ?>
                                            <div class="table-responsive">
                                                <table class="table table-striped ">
                                                    <thead>
                                                        <tr>
                                                            <th>Offer To</th>
                                                            <th>Offer Price</th>
                                                            <th>Offer Date</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                     
                                                        @foreach($saleOffers as $offer)
                                                        <tr>
                                                            <td>{{ getFullName($offer->property_owner_user) }}</td>
                                                            <?php if(count($offer->sale_counter_offers) > 0) { ?>
                                                            <td><span class="money"><?php echo round($offer->sale_counter_offers->first()->counter_offer_price)?></td>
                                                               
                                                            <?php } else { ?>
                                                            <td><span class="money">{{round($offer->tentative_offer_price)??"NA" }}</span></td>
                                                            <?php } ?>
                                                           
                                                            <td>{{date("d F Y", strtotime($offer->created_at))}}</td>
                                                            <td class="approved">{{ ucwords(str_replace('_',' ',config('constant.offer_status.'.$offer->status)))}}</td>
                                                            <td>
                                                                {{ html()->form('GET', route('frontend.sent.view.offer'))->class('form-horizontal')->open() }}
                                                                <input type="hidden" name="offer_id" value="{{ $offer->id }}">
                                                                <input type="hidden" name="type" value="{{ isset($offer->property) ? $offer->property->property_type : '' }}">
                                                                <input type="hidden" name="property_id" value="{{ isset($offer->property) ? $offer->property->id : '' }}">
                                                                <input type="hidden" name="owner_id" value="{{ $offer->property_owner_user->id }}">
                                                                <button class="single-btn-offer view" type="submit">View &amp; Reply </button>
                                                                 
                                                                {{ html()->form()->close() }}
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table><!--table-->

                                            </div><!-- col-md-12 -->
                                            {{ $saleOffers->fragment('Sale')->links() }}
                                        <?php } else { ?>
                                            <h4 class="no-data">No Sale offer recieved</h4>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--container-->
</div><!--dashboard-page-->
@endsection
@section('after-scripts')
<script>
    $(function(){
    var current = window.location.href;
    var split   = current.split("#"); 
    $('.nav li a').each(function(){
        var $this = $(this);
        // if the current path is like this link, make it active
        if($this.attr('href').indexOf(split[1]) !== -1){
	    $('.nav li').removeClass( 'active' );
	    $('.tab-pane').removeClass( 'active' );
	    $('#'+split[1]).addClass('active');
            $this.parent().addClass('active');
        }
    })
})
    </script>
    @endsection