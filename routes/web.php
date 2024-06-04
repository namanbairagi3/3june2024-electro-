<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/shop/cart', function () {
    return view('shop/cart');
});