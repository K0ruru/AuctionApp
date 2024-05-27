<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminAuth
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
        if (!Auth::guard('petugas')->check()) {
            return redirect('/login-register/login')->withErrors(['message' => 'Please log in to access this area.']);
        }

        $user = Auth::guard('petugas')->user();
        if ($user->id_level !== 1) { // Updated to check id_level
            return redirect('/')->withErrors(['message' => 'Unauthorized access.']);
        }

        return $next($request);
    }
}
