<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param string|null $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check() && Auth::user()->role->id == 1 && Auth::user()->status_akun == 1) {
            return redirect()->route('admin.dashboard');
        }
        elseif (Auth::guard($guard)->check() && Auth::user()->role->id == 2 && Auth::user()->status_akun == 1) {
            return redirect()->route('user.dashboard');
        }
        elseif (Auth::guard($guard)->check() && Auth::user()->status_akun == 0) {
            return redirect()->route('blocked');
        }
        else {
            return $next($request);
        }

    }
}
