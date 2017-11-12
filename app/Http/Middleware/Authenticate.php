<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
       // redirect the user to "/login"
// and stores the url being accessed on session
        if (Auth::guest()) {
            return redirect()->guest('/login');
        }
        return $next($request);
    }
}
