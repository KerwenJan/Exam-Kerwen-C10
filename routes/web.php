<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\HomeController::class, 'home']);
Route::get('/restaurant', [App\Http\Controllers\RestaurantController::class, 'restaurantIndex']);
Route::get('/category', [App\Http\Controllers\CategoryController::class, 'categoryIndex']);
Route::get('/food', [App\Http\Controllers\CategoryController::class, 'foodIndex']);
Route::get('/food/show/{id}', [App\Http\Controllers\CategoryController::class, 'foodShow']);