<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Exceptions\UnauthorizedException;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next ,$controller)
    {
        $permission = $controller.'.*.'.$request->id;
        if (! Auth::user()->hasPermissionTo($permission))
        {
            return response()->json([
                "success" => false,
                "message" => 'You do not have the required authorization.',
                "data" => [],
                "count" => 0,
                "status" => 403
            ], 403);
//            throw UnauthorizedException::forPermissions([$permission]);
        }
        return $next($request);
    }
}
