<?php

use App\Http\Controllers\Api\FoodController;
use App\Http\Controllers\Api\KategoriController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
// Route::apiResource('/user', UserController::class);

Route::resource('foods', App\Http\Controllers\Api\FoodController::class);
Route::resource('kategoris', App\Http\Controllers\Api\KategoriController::class);

