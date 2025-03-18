<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TugasController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
// login
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginproses'])->name('loginproses');
// logout
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// register
Route::get('register', [AuthController::class, 'register'])->name('register');

// logika dari 3 rout ini seseorang yang login saja yang bisa mengakes, dan jika belum login seorang tersebut tidak bisa mengakses nya  atau    "MIDDLEWARE"

Route::middleware('checklogin')->group(function(){}); //eben bisa esih di akses 
// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// user
Route::get('/user', [UserController::class, 'index'])->name('user');
// tugas
Route::get('/tugas', [TugasController::class, 'index'])->name('tugas');


