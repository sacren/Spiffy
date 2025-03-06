<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('spiffy');
});

Route::get('/counter', function () {
    return view('counter');
});
