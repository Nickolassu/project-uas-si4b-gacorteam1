<?php

namespace App\Http\Controllers;

use App\Models\dokter;
use App\Models\obat;
use App\Models\pasien;
use App\Models\kunjungan;
use Illuminate\Http\Request;

class KunjunganController extends Controller
{
    // if($request->user()->cannot('create',Fakultas::class)){
    //     abort(403);
    public function index()
    {
        $kunjungan=kunjungan::all();
        return view('kunjungan.index')
            ->with('kunjungan',$kunjungan);
    }

    public function create()
    {
        $dokter = dokter::all();
        $pasien = pasien::all();
        $obat = obat::all();
        return view('kunjungan.create', compact('dokter', 'pasien', 'obat'));
    }

    public function store(Request $request)
    {
        $val = $request->validate([
            'pasien_id'=>'required',
            'tanggal_kunjungan' => 'required|date',
            'dokter_id' => 'required',
            'obat_id' => 'required',
            'harga' => 'required|numeric',
            'no_urut' => 'required|integer',
        ]);
        kunjungan::create($val);
        return redirect()->route('kunjungan.index')->with('success', $val['tanggal_kunjungan'] . ' berhasil disimpan');
    }
/**
 * Display the specified resource.
 */
    public function show(kunjungan $kunjungan)
    {
    //
    }

/**
 * Show the form for editing the specified resource.
 */
public function edit(kunjungan $kunjungan)
{
    // $kunjungan=kunjungan::all();
    return view('kunjungan.edit')
    ->with('kunjungan',$kunjungan);
}

/**
 * Update the specified resource in storage.
 */
public function update(Request $request, kunjungan $kunjungan)
{
    $val = $request->validate([
        'pasien_id'=>'required',
        'tanggal_kunjungan' => 'required|date',
        'dokter_id' => 'required',
        'obat_id' => 'required',
        'harga' => 'required|numeric',
        'no_urut' => 'required|integer',
    ]);
    
    kunjungan::where('id', $kunjungan['id'])->update($val);
    return redirect()->route('kunjungan.index')->with('Success', $val['tanggal_kunjungan'] . ' berhasil disimpan');
}

/**
 * Remove the specified resource from storage.
 */
public function destroy(kunjungan $kunjungan)
{
    $kunjungan->delete();
    return redirect()->route('kunjungan.index');
}
}
