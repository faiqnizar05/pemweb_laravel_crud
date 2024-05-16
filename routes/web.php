<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;



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

