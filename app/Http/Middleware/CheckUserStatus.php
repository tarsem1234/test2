<?php

namespace App\Http\Middleware;

use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckUserStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  string|null  $guard
     */
    public function handle(Request $request, Closure $next): Response
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
