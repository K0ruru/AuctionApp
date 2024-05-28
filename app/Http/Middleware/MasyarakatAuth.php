<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class MasyarakatAuth
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
        if (!Auth::guard('masyarakat')->check()) {
            return redirect()->route('login.view.masyarakat')->withErrors(['message' => 'Please log in to access this area.']);
        }

        return $next($request);
    }
}