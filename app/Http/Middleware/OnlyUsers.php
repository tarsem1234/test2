<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Auth;

class OnlyUsers
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(in_array(config('constant.inverse_user_type.User'), array_column(Auth::user()->roles->toArray(), 'sort'))){
            return $next($request);
        }

        return redirect()->route('frontend.user.dashboard');
    }
}
