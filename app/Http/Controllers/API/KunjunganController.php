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

    public function store(Request $request)
{
    $validate = $request->validate([
        'nama' => 'required|unique:kunjungan',
        'singkatan' => 'required|max:4'
    ]);

    $kunjungan = kunjungan::create($validate);
    if($kunjungan){
        $response['success'] = true;
        $response['message'] = 'Kunjungan berhasil ditambahkan.';
        return response()->json($response, Response::HTTP_CREATED);
    }
}
    public function update(Request $request, $id)
    {
    $validate = $request->validate([
        'tanggal_kunjungan' => 'required|date',
        'keluhan' => 'required',
        'diagnosa' => 'required',
        'no_urut' => 'required|integer',
    ]);

    kunjungan::where('id', $id)->update($validate);
    $response['success'] = true;
    $response['message'] = 'Kunjungan berhasil diperbarui.';
    return response()->json($response, Response::HTTP_OK);
}
}