<?php


use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('Auth.login');
});
Route::get('/', function () {
    return view('Dashboard');
});

