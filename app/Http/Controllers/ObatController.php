<?php

namespace App\Http\Controllers;

use App\Models\obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function index()
    {
        $obat=obat::all();
        return view('obat.index')
            ->with('obat',$obat);
    }

    public function create()
    {
        return view('obat.create');
    }

    public function store(Request $request)
    {
        $val = $request->validate([
            'nama_obat' => 'required',
            'deskripsi' => 'required',
            'stok' => 'required|integer',
            'dosis' => 'required',
        ]);
        obat::create($val);
        return redirect()->route('obat.index')->with('success', $val['nama_obat'] . ' berhasil disimpan');
    }

/**
 * Display the specified resource.
 */
    public function show(obat $obat){
    //
}

/**
 * Show the form for editing the specified resource.
 */
public function edit(obat $obat)
{
    // $obat=obat::all();
    return view('obat.edit')
    ->with('obat',$obat);
}

/**
 * Update the specified resource in storage.
 */
public function update(Request $request, obat $obat)
{
    $val = $request->validate([
        'nama_obat' => 'required',
        'deskripsi' => 'required',
        'stok' => 'required|integer',
        'dosis' => 'required',
    ]);
    obat::where('id', $obat['id'])->update($val);
    
    return redirect()->route('obat.index')->with('Success', $val['nama_obat'] . ' berhasil disimpan');
}

/**
 * Remove the specified resource from storage.
 */
public function destroy(obat $obat)
{
    $obat->delete();
    return redirect()->route('obat.index');
}
}
