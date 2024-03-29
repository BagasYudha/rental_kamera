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