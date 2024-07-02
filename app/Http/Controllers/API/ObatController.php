<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\obat;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ObatController extends Controller
{
    public function index()
    {
        $obat = obat::all();
        if ($obat->isEmpty()) {
            $response['message'] = 'Tidak ada obat yang ditemukan.';
            $response['success'] = false;
            return response()->json($response, Response::HTTP_NOT_FOUND);
        }

        $response['success'] = true;
        $response['message'] = 'obat ditemukan.';
        $response['data'] = $obat;
        return response()->json($response, Response::HTTP_OK);
        // atau
        // return response()->json($response, 200);
    }
    public function store(Request $request)
{
    $validate = $request->validate([
        'nama' => 'required|unique:obat',
        'singkatan' => 'required|max:4'
    ]);

    $obat = obat::create($validate);
    if($obat){
        $response['success'] = true;
        $response['message'] = 'Obat berhasil ditambahkan.';
        return response()->json($response, Response::HTTP_CREATED);
    }
}
    public function update(Request $request, $id)
    {
    $validate = $request->validate([
        'nama_obat' => 'required',
        'deskripsi' => 'required',
        'stok' => 'required|integer',
        'dosis' => 'required',
    ]);

    obat::where('id', $id)->update($validate);
    $response['success'] = true;
    $response['message'] = 'Obat berhasil diperbarui.';
    return response()->json($response, Response::HTTP_OK);
}
}