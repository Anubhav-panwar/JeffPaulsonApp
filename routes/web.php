<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::middleware(['guest.check'])->group(function () {
    Route::get('/login', function () {
        return view('Auth.login');
    })->name('login');

    Route::get('/register', function () {
        return view('Auth.register');
    })->name('register');
});

Route::middleware(['auth.check'])->group(function () {
    Route::get('/', function () {
        return view('Dashboard');
    })->name('dashboard');
});