<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\ProductController; // Import Controller Produk
use App\Http\Controllers\FeedbackController;

// --- ROUTES PUBLIK ---
// Mengarahkan '/' ke method homePublic di ProductController agar data produk tampil di landing page
Route::get('/', [ProductController::class, 'homePublic'])->name('home');
// Publik mengirim feedback
Route::post('/feedback/store', [FeedbackController::class, 'storePublic'])->name('feedback.submit');
Route::get('/produk', function () { return view('produk'); });
Route::get('/service', function () { return view('service'); });
Route::get('/profil', function () { return view('profil'); });
Route::get('/detailProduk', function () { return view('detailProduk'); });

// --- ROUTES AUTHENTICATION ---
Route::get('/loginadmin', [AdminAuthController::class, 'showLoginForm'])->name('login.admin');
Route::post('/loginadmin', [AdminAuthController::class, 'login']);
Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

// --- ROUTES KHUSUS ADMIN (Middleware Protected) ---
// --- ROUTES KHUSUS ADMIN (Middleware Protected) ---
// --- ROUTES KHUSUS ADMIN (Middleware Protected) ---
Route::middleware(['admin'])->prefix('admin')->group(function () {
    
    // Navigasi Halaman Admin
    // Kita satukan URL /homeadmin agar mengambil data dari ProductController@index
    Route::get('/homeadmin', [ProductController::class, 'index'])->name('admin.home');
    
    // Hapus rute /dashboard jika tidak digunakan, atau biarkan jika memang ada halaman terpisah
    // Route::get('/dashboard', [ProductController::class, 'index'])->name('admin.dashboard'); 
    
    Route::get('/produkadmin', function () { return view('Admin.produkadmin'); });
    Route::get('/detailprodukadmin', function () { return view('Admin.detailprodukadmin'); });

    // Operasi CRUD Produk (Logika Backend)
    Route::post('/product', [ProductController::class, 'store'])->name('product.store');
    Route::put('/product/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('product.destroy');

    // Admin mengelola feedback
    Route::post('/feedback/toggle/{id}', [FeedbackController::class, 'toggleFeatured'])->name('feedback.toggle');
    Route::delete('/feedback/{id}', [FeedbackController::class, 'destroy'])->name('feedback.destroy');
});