<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah user sudah login DAN role-nya admin
        if (auth()->check() && auth()->user()->role === 'admin') {
            return $next($request); // Izinkan akses
        }

        // Jika tidak, block dengan error 403
        abort(403, 'Unauthorized - Admin Only');
    }
}