<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KendaraanController;



Route::get('/', function () {
    return view('components.welcome-content');
})->name('welcome');
// login
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginproses'])->name('loginproses');
// logout
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// register
Route::get('register', [AuthController::class, 'register'])->name('register');

//    "MIDDLEWARE"

Route::middleware('checklogin')->group(function(){}); //eben bisa esih di akses 
// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// login

// user
Route::get('/user', [UserController::class, 'index'])->name('user');
// tugas
Route::get('/tugas', [TugasController::class, 'index'])->name('tugas');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Kendaraan
Route::prefix('kendaraan')->group(function() {
    Route::get('/mobil', [KendaraanController::class, 'mobil'])->name('kendaraan.mobil');
    Route::get('/motor', [KendaraanController::class, 'motor'])->name('kendaraan.motor');
});

// Barang
Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');
Route::get('/barang/run', [BarangController::class, 'run'])->name('barang.run');



// Route::prefix('barang')->group(function() {
//     Route::get('/laptop', [BarangController::class, 'laptop'])->name('barang.laptop');
//     Route::get('/printer', [BarangController::class, 'printer'])->name('barang.printer');
//     Route::get('/pc', [BarangController::class, 'pc'])->name('barang.pc');
// });
