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
    public function store(Request $request)
{
    $validate = $request->validate([
        'nama' => 'required',
        'kelamin' => 'required',
        'no_hp' => 'required',
        'tanggal_lahir' => 'required',
        'alamat' => 'required',
        'dokter_id' => 'required',
        'kunjungan_id' => 'required',
        'obat_id' => 'required',
        'harga' => 'required|numeric',
    ]);

    $pasien = pasien::create($validate);
    if($pasien){
        $response['success'] = true;
        $response['message'] = 'Pasien berhasil ditambahkan.';
        return response()->json($response, Response::HTTP_CREATED);
    }
}
public function update(Request $request, $id)
    {
    $validate = $request->validate([
       'nama' => 'required',
        'kelamin' => 'required',
        'no_hp' => 'required',
        'tanggal_lahir' => 'required',
        'alamat' => 'required',
        'dokter_id' => 'required',
        'kunjungan_id' => 'required',
        'obat_id' => 'required',
        'harga' => 'required|numeric',
    ]);

    pasien::where('id', $id)->update($validate);
    $response['success'] = true;
    $response['message'] = 'Pasien berhasil diperbarui.';
    return response()->json($response, Response::HTTP_OK);
}
}
