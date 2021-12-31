<?php

use Illuminate\Support\Facades\Route;

Route::name('app_home')->get('/', function () {
    return view('Pages/home');
});

Route::name('app_about')->get('/about-us', function () {
    return view('Pages/about');
});
