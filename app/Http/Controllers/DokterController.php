<?php

namespace App\Http\Controllers;

use App\Models\dokter;
use App\Models\pasien;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    // if($request->user()->cannot('create',Fakultas::class)){
    //     abort(403);
    public function index()
    {
        if(auth()->user()->role == 'D'){
            $dokter = dokter::where('id',auth()->user()->id)->get();

        } else {
            $dokter = dokter::all();
        }
        return view('dokter.index')
        ->with('dokter',$dokter);
    }

    public function create()
    {
        return view('dokter.create');
    }

    public function store(Request $request)
    {
        if($request->user()->cannot('create',dokter::class)){
            abort(403);
        }
        $val = $request->validate([
        
            'nama' => 'required',
            'user_id'  => 'required',
            'spesialis' => 'required',
            'harga'  => 'required|numeric',
        ]);
        dokter::create($val);
        return redirect()->route('dokter.index')->with('success', $val['nama'] . ' berhasil disimpan');
    }
    
/**
 * Display the specified resource.
 */
    public function show(dokter $dokter){
    //
}

/**
 * Show the form for editing the specified resource.
 */
public function edit(dokter $dokter)
{
    //dd($dokter);
    //$dokter=dokter::all();
    return view('dokter.edit')
    ->with('dokter',$dokter);
}

/**
 * Update the specified resource in storage.
 */
public function update(Request $request, dokter $dokter)
{
    $val = $request->validate([
            'user_id'  => 'required',
            'spesialis' => 'required',
            'harga'  => 'required|numeric',
    ]);

    
    dokter::where('id', $dokter['id'])->update($val);
    return redirect()->route('dokter.index')->with('Success', $val['nama'] . ' berhasil disimpan');
}


/**
 * Remove the specified resource from storage.
 */
public function destroy(dokter $dokter)
{
    $dokter->delete();
    return redirect()->route('dokter.index');
}
}