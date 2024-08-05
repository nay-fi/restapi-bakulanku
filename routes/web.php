<?php

use App\Http\Controllers\Api\FoodController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FoodController::class, 'index']);
Route::get('/login', [AuthController::class, 'indexlogin'])->name('login');
Route::post('/ceklogin', [AuthController::class, 'validate'])->name('ceklogin');
Route::get('/ceklogin', [AuthController::class, 'validate']);
Route::post('/ceklogout', [AuthController::class, 'logout'])->name('ceklogout');
Route::get('/ceklogout', [AuthController::class, 'logout']);

// Route::resource('/admin', FoodController::class);
Route::get('/admin/admin', [FoodController::class, 'indexadmin'])->name('admin.dashboard');
// Route::resource('/admin', FoodController::class);
Route::resource('/order', CustomerController::class);

