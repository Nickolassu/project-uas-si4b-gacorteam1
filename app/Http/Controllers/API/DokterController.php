<?php

namespace App\Http\Controllers\API;


use App\Models\dokter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DokterController extends Controller
{
    public function index()
    {
        $dokter = dokter::all();
        if ($dokter->isEmpty()) {
            $response['message'] = 'Tidak ada dokter yang ditemukan.';
            $response['success'] = false;
            return response()->json($response, Response::HTTP_NOT_FOUND);
        }

        $response['success'] = true;
        $response['message'] = 'Dokter ditemukan.';
        $response['data'] = $dokter;
        return response()->json($response, Response::HTTP_OK);
        // atau
        // return response()->json($response, 200);
    }
}