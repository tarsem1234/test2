<?php

namespace App\Http\Middleware;

use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;
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
    public function handle(Request $request, Closure $next): Response
    {
        if (! Session::get('OFFER')) {
            return redirect()->route('frontend.recieved.offers');
        }

        return $next($request);
    }
}
