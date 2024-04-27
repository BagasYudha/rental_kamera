<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/adminlog', function () {
    return view('AdminLogin');
});

Route::get('/admin', function () {
    return view('Admin');
});

Route::get('/navbar', function () {
    return view('navbar');
});

Route::get('/spesifikasi', function () {
    return view('spesifikasi');
});

Route::get('/Transaksi', function () {
    return view('Transaksi');
});

Route::get('/rental', function () {
    return view('rental');
});


//route resource for products
Route::resource('/products', \App\Http\Controllers\ProductController::class);

Route::post('/products', [\App\Http\Controllers\ProductController::class, 'store'])->name('products.store');