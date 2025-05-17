<?php

use App\Http\Controllers\AdminController;  // Ensure this import is present
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminParticipantController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WinnerController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);


Route::get('registers', [AuthController::class, 'index']);
Route::post('submit.register', [AuthController::class, 'create']);

// dashboards routes 
Route::get('dashboard', [AdminController::class, 'index']);
// Route::get('/admin/announce-winner', [AdminController::class, 'announceWinner'])->name('admin.announce.winner');

// participant routes 
Route::get('register.users', [AdminParticipantController::class, 'index']);
Route::get('delete.participant/{id}', [AdminParticipantController::class, 'Delete']);

Route::get('admin=announce-winner', [AdminController::class, 'announceWinner']);

Route::get('winners.users', [WinnerController::class, 'index']);


