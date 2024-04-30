<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route sumber daya untuk produk
Route::resource('/products', \App\Http\Controllers\ProductController::class);

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

Route::get('/edit', function () {
    return view('Edit');
});

Route::get('/tambah', function () {
    return view('tambah');
});

Route::get('/create', function () {
    return view('create');
});

// Gunakan App\Http\Controllers\ProductController;
Route::get('/tambah/create', 'ProductController@create')->name('create');

// Route sumber daya untuk produk
Route::resource('/tambah', \App\Http\Controllers\ProductController::class);
