<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAuthentication
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!auth()->check()) {
            return redirect()->route('admin.login');
        }

        if (!in_array(auth()->user()->role, ['super_admin', 'clinic_admin'])) {
            abort(403, 'Unauthorized');
        }

        return $next($request);
    }
}
