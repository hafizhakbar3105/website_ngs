<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Category; // <-- Tambahkan model Category

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Bagikan data kategori ke komponen footer secara global
        View::composer('footer', function ($view) {
            $view->with('categoriesFooter', Category::all());
        });
    }
}