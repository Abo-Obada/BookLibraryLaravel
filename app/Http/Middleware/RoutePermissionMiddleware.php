<?php

namespace App\Http\Middleware;

use App\Models\RouteHasPermission;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;

class RoutePermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $perm = Auth::user()->getAllPermissions()->select('id');
        $currentRoute = Route::getCurrentRoute()->uri();
       $routePermission = RouteHasPermission::whereIn('permission_id',$perm)->get();
       $isFound = $routePermission->contains(fn($permission) => $permission->route == $currentRoute);
    if (!$isFound) {
        return response()->json(['message'=>'forbidden','currentRoute' => $currentRoute],403);
    }
        return $next($request);
    }
}
