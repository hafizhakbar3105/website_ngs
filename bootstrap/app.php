<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        
        // Mendaftarkan Middleware Alias untuk Admin
        $middleware->alias([
            'admin' => \App\Http\Middleware\IsAdmin::class,
        ]);

        // Catatan: Baris $middleware->redirectUsersTo() sengaja DIHAPUS.
        // Ini memastikan Anda (meskipun sudah login) tetap bisa melihat 
        // halaman landing page publik dengan normal.

    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();