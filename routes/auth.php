<?php

use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('login', 'App\Http\Controllers\AuthController@login')->name('login');
    Route::post('login', 'App\Http\Controllers\AuthController@auth')->name('auth');
});

Route::middleware('auth')->group(function () {
    Route::post('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');
});
