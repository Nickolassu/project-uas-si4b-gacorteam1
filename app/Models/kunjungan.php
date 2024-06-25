<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kunjungan extends Model
{
    use HasFactory;
    
    protected $fillable = ['tanggal_kunjungan', 'keluhan', 'diagnosa', 'no_urut'];

    public function pasiens(){
        return $this->belongsTo(pasien::class, 'kunjungan_id');
    }
}
