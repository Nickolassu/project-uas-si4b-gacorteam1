<?php

use App\Http\Controllers\API\BaseContoller\DokterController;
use App\Http\Controllers\API\DokterController as APIDokterController;
use App\Http\Controllers\API\KunjunganController;
use App\Http\Controllers\API\ObatController;
use App\Http\Controllers\API\PasienController;
use App\Http\Controllers\DokterController as ControllersDokterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('dokter', [APIDokterController::class, 'index']);
Route::get('kunjungan', [KunjunganController::class, 'index']);
Route::get('obat', [ObatController::class, 'index']);
Route::get('pasien', [PasienController::class, 'index']);