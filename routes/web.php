<?php

use App\Http\Controllers\Api\FoodController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('menu_display');
});
Route::get('/login', function () {
    return view('signup');
});
Route::resource('/admin', FoodController::class);

