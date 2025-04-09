<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PnsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\DiklatController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\UnitKerjaController;
use App\Http\Controllers\TMTBerkalaController;
use App\Http\Controllers\ManajemenUserController;
use App\Http\Controllers\TMTKenaikanPangkatController;



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

Route::middleware('checklogin')->group(function () {}); //eben bisa esih di akses 
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
Route::prefix('kendaraan')->group(function () {
    Route::get('/mobil', [KendaraanController::class, 'mobil'])->name('kendaraan.mobil');
    Route::get('/motor', [KendaraanController::class, 'motor'])->name('kendaraan.motor');
});

// Barang
Route::get('/barang/laptop', [BarangController::class, 'laptop'])->name('barang.laptop');
Route::get('/barang/printer', [BarangController::class, 'printer'])->name('barang.printer');
Route::get('/barang/pc', [BarangController::class, 'pc'])->name('barang.pc');
Route::get('/barang/lainnya', [BarangController::class, 'lainnya'])->name('barang.lainnya');


// Manajemen User
Route::get('/manajemenuser', [ManajemenUserController::class, 'index'])
    ->name('manajemenuser.index');
// Jabatan
Route::get('/jabatan', [JabatanController::class, 'index'])->name('jabatan.index');

// unitkerja
Route::get('/unitkerja', [UnitKerjaController::class, 'index'])->name('unit-kerja.index');

// TMT Kenaikan Pangkat
Route::prefix('tmt-kenaikan-pangkat')->group(function () {
    Route::get('/', [TMTKenaikanPangkatController::class, 'index'])
        ->name('tmt-pangkat.index');

    Route::post('/', [TMTKenaikanPangkatController::class, 'store'])
        ->name('tmt-pangkat.store');
});

// TMT Kenaikan Berkala
Route::prefix('tmt-berkala')->group(function () {
    Route::get('/', [TMTBerkalaController::class, 'index'])->name('tmt-berkala.index');
    // Route::post('/', [TMTBerkalaController::class, 'store'])->name('tmt-berkala.store');
});

// routes/web.php

// TMT Pensiun
Route::prefix('tmt-pensiun')->name('tmt.pensiun.')->group(function () {
    Route::get('/', [\App\Http\Controllers\TmtPensiunController::class, 'index'])->name('index');
    Route::get('/create', [\App\Http\Controllers\TmtPensiunController::class, 'create'])->name('create');
    Route::post('/', [\App\Http\Controllers\TmtPensiunController::class, 'store'])->name('store');
    Route::get('/{id}', [\App\Http\Controllers\TmtPensiunController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [\App\Http\Controllers\TmtPensiunController::class, 'edit'])->name('edit');
    Route::put('/{id}', [\App\Http\Controllers\TmtPensiunController::class, 'update'])->name('update');
    Route::delete('/{id}', [\App\Http\Controllers\TmtPensiunController::class, 'destroy'])->name('destroy');
});


// PNS Keseluruhan 
Route::get('/pns', [PnsController::class, 'index'])->name('pns.index');
Route::get('/pns/{id}', [PnsController::class, 'show'])->name('pns.show');

Route::get('/jadwal-diklat', [DiklatController::class, 'jadwal'])->name('diklat.jadwal');

// Berkas Kenaikan Pangkat
Route::get('/berkas-kenaikan-pangkat', [TMTKenaikanPangkatController::class, 'berkas'])->name('berkas.kenaikan-pangkat');



// Route::prefix('barang')->group(function() {
//     Route::get('/laptop', [BarangController::class, 'laptop'])->name('barang.laptop');
//     Route::get('/printer', [BarangController::class, 'printer'])->name('barang.printer');
//     Route::get('/pc', [BarangController::class, 'pc'])->name('barang.pc');
// });
