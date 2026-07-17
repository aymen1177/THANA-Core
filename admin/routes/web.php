<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CategoryController;

Route::get('/', [ServiceController::class, 'index']);

Route::resource('categories', CategoryController::class);

Route::resource('services', ServiceController::class);
