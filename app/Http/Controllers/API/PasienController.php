<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\pasien;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PasienController extends Controller
{
    public function index()
    {
        $pasien = pasien::all();
        if ($pasien->isEmpty()) {
            $response['message'] = 'Tidak ada pasien yang ditemukan.';
            $response['success'] = false;
            return response()->json($response, Response::HTTP_NOT_FOUND);
        }

        $response['success'] = true;
        $response['message'] = 'pasien ditemukan.';
        $response['data'] = $pasien;
        return response()->json($response, Response::HTTP_OK);
        // atau
        // return response()->json($response, 200);
    }
}
