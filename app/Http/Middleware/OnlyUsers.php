<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class OnlyUsers
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (in_array(config('constant.inverse_user_type.User'), array_column(Auth::user()->roles->toArray(), 'sort'))) {
            return $next($request);
        }

        return redirect()->route('frontend.user.dashboard');
    }
}
