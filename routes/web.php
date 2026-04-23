<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/nav', function () {
    return view('nav');
});

Route::get('/footer', function () {
    return view('footer');
});

Route::get('/detailProduk', function () {
    return view('detailProduk');
});

//Admin
Route::get('/homeadmin', function () {
    return view('Admin/homeadmin');
});