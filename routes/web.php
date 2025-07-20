<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

include __DIR__ . '/auth.php';

// guest routes
Route::middleware('guest')->group(function () {
    //
});

// protected routes
Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return Inertia::render('Welcome');
    })->name('welcome');
    Route::get('/private', function () {
        return Inertia::render('Private');
    })->name('private');
    Route::get('/private/2', function () {
        return Inertia::render('Private');
    })->name('private.edit');
});
