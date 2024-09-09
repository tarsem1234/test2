<?php

namespace App\Http\Middleware;

use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;
use Closure;

/**
 * Class RouteNeedsRole.
 */
class RouteNeedsRole
{
    /**
     * @param  bool  $needsAll
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role, $needsAll = false): Response
    {
        /*
         * Roles array
         */
        if (strpos($role, ';') !== false) {
            $roles = explode(';', $role);
            $access = access()->hasRoles($roles, ($needsAll === 'true' ? true : false));
        } else {
            /**
             * Single role.
             */
            $access = access()->hasRole($role);
        }

        if (! $access) {
            return redirect()
                ->route(homeRoute())
                ->withFlashDanger(trans('auth.general_error'));
        }

        return $next($request);
    }
}
