<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Pages/home');
});

Route::get('/about-us', function () {
    return view('Pages/about');
});
