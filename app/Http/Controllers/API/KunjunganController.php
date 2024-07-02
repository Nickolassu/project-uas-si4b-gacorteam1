<?php

namespace App\Http\Controllers\API;



use App\Http\Controllers\Controller;
use App\Models\kunjungan;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class KunjunganController extends Controller
{
    public function index()
    {
        $kunjungan = kunjungan::all();
        if ($kunjungan->isEmpty()) {
            $response['message'] = 'Tidak ada kunjungan yang ditemukan.';
            $response['success'] = false;
            return response()->json($response, Response::HTTP_NOT_FOUND);
        }

        $response['success'] = true;
        $response['message'] = 'kunjungan ditemukan.';
        $response['data'] = $kunjungan;
        return response()->json($response, Response::HTTP_OK);
        // atau
        // return response()->json($response, 200);
    }
}