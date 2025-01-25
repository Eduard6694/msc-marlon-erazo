<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticatedByRole
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $role = Auth::user()->role;

            // Redirigir según el rol del usuario
            if ($role === 'Admin') {
                return redirect()->route('admin.dashboard');
            }

            if ($role === 'User') {
                return redirect()->route('user.dashboard');
            }
        }

        return $next($request);
    }
}
