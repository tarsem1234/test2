<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class CheckSessionHasOfferSignature
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Session::get('OFFER') && Session::get('PROPERTY')) {
            $Signatures = '';
            $rentSignatures = '';
            $offerSession = Session::get('OFFER');
            $propertyData = Session::get('PROPERTY');

            $property = \App\Models\Property::where('id', $propertyData)->withTrashed()->first();
            if ($property->property_type == config('constant.inverse_property_type.Sale')) {
                $Signatures = \App\Models\Signature::where('offer_id', $offerSession['offer_id'])->where('affix_status', 1)->first();
            }
            if ($property->property_type == config('constant.inverse_property_type.Rent')) {
                $rentSignatures = \App\Models\RentSignature::where('offer_id', $offerSession['offer_id'])->where('affix_status', 1)->first();
            }
            //	dd($Signatures);
            if (! empty($Signatures) || ! empty($rentSignatures)) {
                return redirect()->route('frontend.user.dashboard')->with('flash_success', 'You can\'t Access the contract tool.');
            }
        }

        return $next($request);
    }
}
