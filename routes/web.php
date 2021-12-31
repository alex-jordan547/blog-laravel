<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Pages/home');
})->name('app_home');

Route::get('/about-us', function () {
    return view('Pages/about');
})->name('app_about');
