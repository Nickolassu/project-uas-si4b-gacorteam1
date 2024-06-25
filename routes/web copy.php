<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\KunjunganController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

});
route::get('dashboard', [DashboardController::class, 'index']);
route::resource('pasien',PasienController::class);
route::resource('dokter',DokterController::class);
route::resource('kunjungan',KunjunganController::class);
route::resource('obat',ObatController::class);
