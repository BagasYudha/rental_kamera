<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController; // Import the AdminController
use App\Http\Controllers\TransaksiController;


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

// Route::get('/Transaksi', function () {
//     return view('Transaksi');
// });

Route::get('/rental', function () {
    return view('rental');
});


Route::get('/Transaksi',[TransaksiController::class, 'index']);
Route::get('/create', [TransaksiController::class, 'create'])->name('transaksi.create');
// Route::post('/transaksi', [AdminController::class, 'store'])->name('admin.store');
Route::get('/Transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
Route::delete('/Transaksi/{id}', [TransaksiController::class, 'destroy'])->name('transaksi.destroy');
Route::post('/Transaksi', [TransaksiController::class, 'store'])->name('transaksi.store');