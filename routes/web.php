<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminParticipantController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);


Route::get('registers', [AuthController::class, 'index']);
Route::post('submit.register', [AuthController::class, 'create']);

// dashboards routes 

Route::get('dashboard', [AdminDashboardController::class, 'index']);

// participant routes 
Route::get('register.users', [AdminParticipantController::class, 'index']);
Route::get('delete.participant/{id}', [AdminParticipantController::class, 'Delete']);