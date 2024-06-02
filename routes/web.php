<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\UnitController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/kabar', function () {
    return view('kondisi');
});

Route::get('/pasien', function () {
    return view('pasien');
});

// untuk halaman admin
Route::get('/admin', [AdminController::class, 'index']);


// untuk halaman pegawai
Route::get('/pegawai', [PegawaiController::class, 'index']);

Route::get('/admin/pasien', [PasienController::class, 'index']);

Route::get('/admin/periksa', [PeriksaController::class, 'index']);

Route::get('/admin/dokter', [DokterController::class, 'index']);

Route::get('/admin/unit', [UnitController::class, 'index']);

// route untuk pasien

Route::get('/admin/pasien', [PasienController::class, 'index'])->name('pasiens.index');
Route::get('/admin/pasien/create', [PasienController::class, 'create'])->name('pasiens.create');
Route::post('/admin/pasien/store', [PasienController::class, 'store'])->name('pasiens.store');
Route::get('/admin/pasien/{pasien}', [PasienController::class, 'show'])->name('pasiens.show');

// edit dan update pasien
Route::get('/admin/pasien/{pasien}/edit', [PasienController::class, 'edit'])->name('pasiens.edit');
Route::put('/admin/pasien/{pasien}', [PasienController::class, 'update'])->name('pasiens.update');

// hapus pasien
Route::delete('/admin/pasien/{pasien}', [PasienController::class, 'destroy'])->name('pasiens.destroy');



// edit dan dan update periksa
Route::get('/admin/periksa', [PeriksaController::class, 'index'])->name('periksas.index');
Route::get('/admin/periksa/create', [PeriksaController::class, 'create'])->name('periksas.create');
Route::post('/admin/periksa/store', [PeriksaController::class, 'store'])->name('periksas.store');


// edit buat periksa
Route::get('/admin/periksa/{periksa}', [PeriksaController::class, 'show'])->name('periksas.show');

Route::get('/admin/periksa/{periksa}/edit', [PeriksaController::class, 'edit'])->name('periksas.edit');
Route::put('/admin/periksa/{periksa}', [PeriksaController::class, 'update'])->name('periksas.update');
Route::delete('/admin/periksa/{periksa}', [PeriksaController::class, 'destroy'])->name('periksas.destroy');
 


