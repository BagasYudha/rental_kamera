<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController; // Import the AdminController
use App\Http\Controllers\Auth\ForgotPassword;

Route::get('/', function () {
    return view('index');
});

Route::get('/adminlog', function () {
    return view('AdminLogin');
})->name('admin.loginview');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('auth.forgot-password');

Route::get('reset-password', [ForgotPassword::class, 'resetPassword'])->name('auth.reset-password');
Route::post('reset-password', [ForgotPassword::class, 'resetPassworProcess'])->name('auth.reset-password.send');

Route::post('/forgot-password',[ForgotPassword::class,"index"])->name('auth.forgot-password.send');

Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login'); // Fix the route action for admin login process

Route::get('/admin/Transaksi', function () {
    return view('Admin');
})->name('admin.Transaksi') ;

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