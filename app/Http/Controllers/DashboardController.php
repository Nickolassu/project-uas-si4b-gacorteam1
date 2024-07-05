<?php

namespace App\Http\Controllers;

use App\Models\obat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        // $kunjunganobat= DB::select(" SELECT obats.nama_obat,COUNT(*) as jumlah FROM kunjungans
        // JOIN obats on kunjungans.obat_id=obats.id
        // GROUP BY obats.nama_obat");
        // return view('dashboard')->with('kunjunganobat',$kunjunganobat);
        $data = Obat::select('nama_obat', 'stok')->get();
        return view('dashboard', [
            'data' => $data
        ]); 
}
}
