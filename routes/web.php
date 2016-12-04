<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
})->name('home');

Route::get('/gioi-thieu', function () {
    return view('frontend.about');
})->name('about');

Route::get('/san-pham', function () {
    return view('frontend.product');
})->name('product');

Route::get('/chi-tiet-san-pham', function () {
    return view('frontend.detail-product');
})->name('detail-product');

Route::get('/huong-dan-mua-hang', function () {
    return view('frontend.buy-guide');
})->name('buy-guide');
