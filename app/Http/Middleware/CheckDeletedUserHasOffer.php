<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class CheckDeletedUserHasOffer {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        if (Session::get('OFFER') && Session::get('PROPERTY')) {
            $Signatures = '';
            $rentSignatures = '';
            $offerSession = Session::get('OFFER');
            $propertyData = Session::get('PROPERTY');
    
            $property = \App\Models\Property::where('id', $propertyData)->withTrashed()->first();
            if ($property->property_type == config('constant.inverse_property_type.Sale')) {
            $saleOffer = \App\Models\SaleOffer::where('id', $offerSession['offer_id'])->first();    
            }
            if ($property->property_type == config('constant.inverse_property_type.Rent')) {
            $rentOffer = \App\Models\RentOffer::where('id', $offerSession['offer_id'])->first();    
            }
            if (!empty($saleOffer) && $saleOffer->status == config('constant.inverse_rent_offer_status.user_deleted') || !empty($rentOffer) && $rentOffer->status == config('constant.inverse_rent_offer_status.user_deleted')) {
                return redirect()->route('frontend.user.dashboard')->with('flash_success', "You can't continue the offer , As one of the party in this offer has deleted/deactivated their account.");
            }
    }
    return $next($request);
}
}