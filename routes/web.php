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



