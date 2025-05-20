<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $user = Auth::guard('pengelola')->user();

        if (!$user || !in_array($user->role, $roles)) {
            return redirect('/masuk-page')->with('error-login', 'Anda tidak memiliki akses.');
        }

        return $next($request);
    }
}
