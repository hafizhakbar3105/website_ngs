<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\ProductController; 
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ArticleController;

// --- ROUTES PUBLIK ---
Route::get('/', [ProductController::class, 'homePublic'])->name('home');
Route::post('/feedback/store', [FeedbackController::class, 'storePublic'])->name('feedback.submit');
Route::get('/produk', [ProductController::class, 'produkPublic'])->name('produk.index');
Route::get('/service', function () { return view('service'); });
Route::get('/profil', function () { return view('profil'); });
Route::get('/detailProduk/{id}', [ProductController::class, 'showPublic'])->name('produk.detail');
Route::get('/insight/{slug}', [ArticleController::class, 'showPublic'])->name('article.show');

// --- ROUTES AUTHENTICATION ---
Route::get('/loginadmin', [AdminAuthController::class, 'showLoginForm'])->name('login.admin');
Route::post('/loginadmin', [AdminAuthController::class, 'login']);
Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');


// --- ROUTES KHUSUS ADMIN (Middleware Protected) ---
Route::middleware(['admin'])->prefix('admin')->group(function () {
    
    // Navigasi Halaman Admin
    Route::get('/homeadmin', [ProductController::class, 'index'])->name('admin.home');
    Route::get('/produkadmin', [ProductController::class, 'produkAdmin'])->name('admin.produk.index');
    Route::get('/detailprodukadmin/{id}', [ProductController::class, 'showAdmin'])->name('admin.produk.detail');

    // Operasi CRUD Produk
    Route::post('/product/unggulan', [ProductController::class, 'storeUnggulan'])->name('product.storeUnggulan'); // <-- INI RUTE BARU UNTUK DASHBOARD
    Route::post('/product', [ProductController::class, 'store'])->name('product.store'); // <-- INI RUTE UNTUK KATALOG
    
    Route::put('/product/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
    Route::post('/product/{id}/toggle-status', [ProductController::class, 'toggleStatus'])->name('product.toggleStatus');

    Route::get('/insight', [ArticleController::class, 'indexAdmin'])->name('admin.article.index');
    Route::post('/insight/store', [ArticleController::class, 'store'])->name('admin.article.store');
    Route::get('/insight/edit/{id}', [ArticleController::class, 'edit'])->name('admin.article.edit');
    Route::put('/insight/update/{id}', [ArticleController::class, 'update'])->name('admin.article.update');
    Route::delete('/insight/delete/{id}', [ArticleController::class, 'destroy'])->name('admin.article.destroy');

    Route::post('/categories', [ProductController::class, 'storeCategory'])->name('category.store');
    Route::delete('/categories/{id}', [ProductController::class, 'destroyCategory'])->name('category.destroy');


    // Admin mengelola feedback
    Route::post('/feedback/toggle/{id}', [FeedbackController::class, 'toggleFeatured'])->name('feedback.toggle');
    Route::delete('/feedback/{id}', [FeedbackController::class, 'destroy'])->name('feedback.destroy');


    //Artikel

});