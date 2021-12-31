<?php

use Illuminate\Support\Facades\Route;

Route::name('app_home')->get('/', function () {
    return view('Pages/home');
});

//ou on peut faire de cette façon
//Route::get('/', 'Pages/home')->name('app_home');
//Route::get('/about-us', 'Pages/about')->name('app_about');


Route::name('app_about')->get('/about-us', function () {
    return view('Pages/about');
});
