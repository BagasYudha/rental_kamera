<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController; // Import the AdminController

Route::get('/', function () {
    return view('index');
});

Route::get('/adminlog', function () {
    return view('AdminLogin');
});

Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login'); // Fix the route action for admin login process

Route::get('/admin/dashboard', function () {
    return view('Admin');
})->name('admin.dashboard') ;

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