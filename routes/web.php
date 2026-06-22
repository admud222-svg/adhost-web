<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/free-downloads', function () {
    return view('free-downloads');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/changelog', function () {
    return view('changelog');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/docs', function () {
    return view('docs');
});

Route::get('/auth/google/redirect', [AuthController::class, 'redirectToGoogle']);
Route::get('/auth/google/callback', [AuthController::class, 'handleGoogleCallback']);
Route::get('/logout', [AuthController::class, 'logout']);
