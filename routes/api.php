<?php

use Illuminate\Support\Facades\Route;
use Mgcodeur\LaravelCategorizable\Controllers\CategoryController;

Route::post('categories', [CategoryController::class, 'store']);
Route::get('categories', [CategoryController::class, 'index']);