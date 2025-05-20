<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        $user = Auth::guard('pengelola')->user();
        logger('Middleware admin check, user role: ' . ($user ? $user->role : 'null'));

        if ($user && $user->role === 'admin') {
            return $next($request);
        }

        return redirect('/masuk-page')->with('error-login', 'Akses hanya untuk admin.');
    }
}
