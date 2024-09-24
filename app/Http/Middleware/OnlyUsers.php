<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OnlyUsers
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (in_array(config('constant.inverse_user_type.User'), array_column(Auth::user()->roles->toArray(), 'sort'))) {
            return $next($request);
        }

        return redirect()->route('frontend.user.dashboard');
    }
}
