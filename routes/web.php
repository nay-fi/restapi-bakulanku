<?php

use App\Http\Controllers\Api\FoodController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::resource('/', FoodController::class);
Route::get('/login', [AuthController::class, 'indexlogin'])->name('login');
Route::post('/ceklogin', [AuthController::class, 'validate'])->name('ceklogin');

Route::get('/admin', [FoodController::class, 'indexadmin'])->name('admin.home');
// Route::resource('/admin', FoodController::class);

