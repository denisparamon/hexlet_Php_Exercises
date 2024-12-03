<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// BEGIN (write your solution here)
Route::get('/about', function () {
    return view('about');
});

Route::get('/articles', function () {
    return view('articles');
});
// END
