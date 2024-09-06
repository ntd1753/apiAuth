<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // Kiểm tra role người dùng
        if (!Auth::check() || !$request->user()->hasRole($role)) {
            abort(403, 'Bạn không có quyền truy cập vào trang này.');
        }

        return $next($request);
    }
}
