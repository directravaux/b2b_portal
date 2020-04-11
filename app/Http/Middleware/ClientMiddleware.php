<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class ClientMiddleware
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->user_role == "client") {
            return $next($request);
        }
        return redirect()->route('dashboard');
    }
}
