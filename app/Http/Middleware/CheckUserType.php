<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserType
{
    public function handle(Request $request, Closure $next, string ...$types): Response
    {
        if (!auth()->check() || !in_array(auth()->user()->role, $types)) {
            abort(403, 'Unauthorized');
        }

        return $next($request);
    }
}
