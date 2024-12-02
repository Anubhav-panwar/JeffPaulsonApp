<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            return redirect('/'); // Redirect to dashboard if logged in
        }

        return $next($request); // Proceed to login or register page if not logged in
    }
}
