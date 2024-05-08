<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController; // Import the AdminController
<<<<<<< HEAD

use App\Http\Controllers\Auth\ForgotPassword;

use App\Http\Controllers\TransaksiController;

=======
use App\Http\Controllers\Auth\ForgotPassword;
>>>>>>> 1aecb286e0e02ee280fc7f5055b2c10cff084a86

Route::get('/', function () {
    return view('index');
});

Route::get('/adminlog', function () {
    return view('AdminLogin');
<<<<<<< HEAD

=======
>>>>>>> 1aecb286e0e02ee280fc7f5055b2c10cff084a86
})->name('admin.loginview');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('auth.forgot-password');

Route::get('reset-password', [ForgotPassword::class, 'resetPassword'])->name('auth.reset-password');
Route::post('reset-password', [ForgotPassword::class, 'resetPassworProcess'])->name('auth.reset-password.send');

Route::post('/forgot-password',[ForgotPassword::class,"index"])->name('auth.forgot-password.send');
<<<<<<< HEAD


=======
>>>>>>> 1aecb286e0e02ee280fc7f5055b2c10cff084a86

Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login'); // Fix the route action for admin login process

Route::get('/admin/Transaksi', function () {
    return view('Transaksi');
})->name('admin.Transaksi') ;

Route::get('/navbar', function () {
    return view('navbar');
});

Route::get('/spesifikasi', function () {
    return view('spesifikasi');
});

Route::get('/rental', function () {
    return view('rental');
});


Route::get('/Transaksi',[TransaksiController::class, 'index']);
Route::get('/create', [TransaksiController::class, 'create'])->name('transaksi.create');
Route::get('/Transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
Route::delete('/Transaksi/{id}', [TransaksiController::class, 'destroy'])->name('transaksi.destroy');
Route::post('/Transaksi', [TransaksiController::class, 'store'])->name('transaksi.store');

Route::get('/', function () {
    return view('welcome');
});

//route resource for products
Route::resource('/products', \App\Http\Controllers\ProductController::class);
