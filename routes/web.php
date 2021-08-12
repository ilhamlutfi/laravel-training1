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

Route::get('edulevels', [EdulevelController::class, 'data']); // view data
Route::get('edulevels/add', [EdulevelController::class, 'add']); // view form add
Route::post('edulevels/save', [EdulevelController::class, 'save']); // save data form add
Route::get('edulevels/edit/{id}', [EdulevelController::class, 'edit']); // view form edit
Route::patch('edulevels/update/{id}', [EdulevelController::class, 'update']); // update data


