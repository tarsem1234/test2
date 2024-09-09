<?php

namespace App\Http\Middleware;

use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;
use Closure;

/**
 * Class RouteNeedsRole.
 */
class RouteNeedsPermission
{
    /**
     * @param  bool  $needsAll
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $permission, $needsAll = false): Response
    {
        /*
         * Permission array
         */
        if (strpos($permission, ';') !== false) {
            $permissions = explode(';', $permission);
            $access = access()->allowMultiple($permissions, ($needsAll === 'true' ? true : false));
        } else {
            /**
             * Single permission.
             */
            $access = access()->allow($permission);
        }

        if (! $access) {
            return redirect()
                ->route(homeRoute())
                ->withFlashDanger(trans('auth.general_error'));
        }

        return $next($request);
    }
}
