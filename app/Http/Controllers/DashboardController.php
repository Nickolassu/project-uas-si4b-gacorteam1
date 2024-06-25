<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        $pasienobat= DB::select(" SELECT obats.nama_obat,COUNT(*) as jumlah FROM pasiens
        JOIN obats on pasiens.obat_id=obats.id
        GROUP BY obats.nama_obat");
        return view('dashboard')->with('pasienobat',$pasienobat);
    }
}
