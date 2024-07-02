<?php

use App\Http\Controllers\API\DokterController;
use App\Http\Controllers\API\KunjunganController;
use App\Http\Controllers\API\ObatController;
use App\Http\Controllers\API\PasienController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('dokter', [DokterController::class, 'index']);
Route::get('kunjungan', [KunjunganController::class, 'index']);
Route::get('obat', [ObatController::class, 'index']);
Route::get('pasien', [PasienController::class, 'index']);

Route::post('dokter', [DokterController::class, 'store']);
Route::post('kunjungan', [KunjunganController::class, 'store']);
Route::post('obat', [ObatController::class, 'store']);
Route::post('pasien', [PasienController::class, 'store']);

Route::patch('dokter/{id}', [DokterController::class, 'update']);
Route::patch('kunjungan/{id}', [KunjunganController::class, 'update']);
Route::patch('obat/{id}', [ObatController::class, 'update']);
Route::patch('pasien/{id}', [PasienController::class, 'update']);