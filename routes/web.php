<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TugasController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// login
Route::get('/login', [AuthController::class, 'login'])->name('login');
// user
Route::get('/user', [UserController::class, 'index'])->name('user');
// tugas
Route::get('/tugas', [TugasController::class, 'index'])->name('tugas');
