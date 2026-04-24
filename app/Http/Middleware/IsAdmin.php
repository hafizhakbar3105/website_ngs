<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        // Jika belum login, ATAU sudah login tapi bukan admin
        if (!Auth::check() || Auth::user()->role !== 'admin') {
            // Arahkan kembali ke halaman login admin
            return redirect('/loginadmin')->with('error', 'Silakan login sebagai Admin terlebih dahulu.');
        }

        return $next($request);
    }
}