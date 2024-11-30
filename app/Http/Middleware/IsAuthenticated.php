<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Tymon\JWTAuth\Facades\JWTAuth;
class IsAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            // Try to parse and authenticate the JWT token
            JWTAuth::parseToken()->authenticate();
            // If user is authenticated, continue with the request
            return redirect('/dashboard'); // Optionally, redirect logged-in users to the dashboard
        } catch (\Exception $e) {
            // If token is missing or invalid, allow the request to continue
            return $next($request);
        }
    }
}
