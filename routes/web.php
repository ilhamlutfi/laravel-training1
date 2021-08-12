<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EdulevelController;

// Daftar routes

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('home');
});

Route::get('edulevels', [EdulevelController::class, 'data']);
Route::get('edulevels/add', [EdulevelController::class, 'add']);
Route::post('edulevels/save', [EdulevelController::class, 'save']);
