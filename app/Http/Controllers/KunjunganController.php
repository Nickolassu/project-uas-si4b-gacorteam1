<?php

namespace App\Http\Controllers;

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
        return view('kunjungan.create');
    }

    public function store(Request $request)
    {
        $val = $request->validate([
            'tanggal_kunjungan' => 'required|date',
            'keluhan' => 'required',
            'diagnosa' => 'required',
            'no_urut' => 'required|integer',
        ]);
        kunjungan::create($val);
        return redirect()->route('kunjungan.index')->with('success', $val['no_urut'] . ' berhasil disimpan');
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
        'tanggal_kunjungan' => 'required|date',
        'keluhan' => 'required',
        'diagnosa' => 'required',
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
