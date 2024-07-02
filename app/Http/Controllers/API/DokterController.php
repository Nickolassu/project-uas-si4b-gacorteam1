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

    public function store(Request $request)
    {
    $validate = $request->validate([
        'nama' => 'required|unique:dokter',
        'singkatan' => 'required|max:4'
    ]);

    $dokter = dokter::create($validate);
    if($dokter){
        $response['success'] = true;
        $response['message'] = 'Dokter berhasil ditambahkan.';
        return response()->json($response, Response::HTTP_CREATED);
    }
}
    public function update(Request $request, $id)
    {
    $validate = $request->validate([
        'nama' => 'required',
        'no_hp' => 'required',
        'spesialis' => 'required',
    ]);

    dokter::where('id', $id)->update($validate);
    $response['success'] = true;
    $response['message'] = 'Dokter berhasil diperbarui.';
    return response()->json($response, Response::HTTP_OK);
}
}