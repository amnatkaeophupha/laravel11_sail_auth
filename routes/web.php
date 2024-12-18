<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('/auth', AuthController::class);
Route::get('/signin', [AuthController::class, 'index']);
Route::get('/signup', function () { return view('auth.signup'); });
Route::post('/store', [AuthController::class, 'store']);
Route::get('/forgot-password', function () { return view('auth.forgot-password'); });
Route::get('/reset-password', function () { return view('auth.reset-password'); });
