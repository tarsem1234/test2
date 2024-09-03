<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class CheckSessionHasOfferValues
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (! Session::get('OFFER')) {
            return redirect()->route('frontend.recieved.offers');
        }

        return $next($request);
    }
}
