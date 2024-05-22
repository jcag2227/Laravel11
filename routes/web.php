<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function() {
    return view('crud/index');
});

Route::get('/test2', function() {
    return view('crud/link');
})->name('crud');