<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckUserStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //check the value of status,If status is zero means user has deactivate in that case just logout that user and redirect to login screen
        $getUser = \App\Models\Access\User\User::where('id', Auth::id())->first();
        if (empty($getUser->status)) {
            Auth::logout();

            return redirect()->to('/login');
        }

        return $next($request);
    }
}
