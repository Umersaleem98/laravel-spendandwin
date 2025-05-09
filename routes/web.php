<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);


Route::get('registers', [AuthController::class, 'index']);
Route::post('submit.register', [AuthController::class, 'create']);