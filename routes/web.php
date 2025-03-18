<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('components.welcome-content');
})->name('welcome');
// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// login

// user
Route::get('/user', [UserController::class, 'index'])->name('user');
// tugas
Route::get('/tugas', [TugasController::class, 'index'])->name('tugas');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
