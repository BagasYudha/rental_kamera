<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ForgotPassword;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\AdminController;



// User View
Route::get('/', function () {
    return view('index');
});

Route::get('/navbar', function () {
    return view('navbar');
});

Route::get('/rental', [ProductController::class, 'rentalProduk']);

Route::get('/spesifikasi/{id}', [ProductController::class, 'showSpesifikasi'])->name('spesifikasi.show');




// Login
Route::get('/adminlog', function () {
    return view('AdminLogin');
})->name('admin.loginview');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('auth.forgot-password');

Route::get('reset-password', [ForgotPassword::class, 'resetPassword'])->name('auth.reset-password');
Route::post('reset-password', [ForgotPassword::class, 'resetPassworProcess'])->name('auth.reset-password.send');

Route::post('/forgot-password', [ForgotPassword::class, "index"])->name('auth.forgot-password.send');

Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login');



// Products
Route::get('/admin/products', function () {
    return view('products.index');
})->name('products.index');

Route::get('/navbarAdmin', function () {
    return view('products.navbarAdmin');
});

// Route resource for products
Route::resource('/products', ProductController::class);

// Transaksi
Route::get('/Transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
Route::post('/Transaksi', [TransaksiController::class, 'store'])->name('transaksi.store');
Route::get('/create', [TransaksiController::class, 'create'])->name('transaksi.create');
Route::delete('/Transaksi/{id}', [TransaksiController::class, 'destroy'])->name('transaksi.destroy');
