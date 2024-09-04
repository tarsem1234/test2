<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class CheckSessionHasOfferPropertyId
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (! Session::get('PROPERTY')) {
            return redirect()->route('frontend.recieved.offers');
        }

        return $next($request);
    }
}
