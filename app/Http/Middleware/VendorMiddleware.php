<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class VendorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->user_role == "vendor") {
            return $next($request);
        }
        return redirect()->route('dashboard');
    }
}
