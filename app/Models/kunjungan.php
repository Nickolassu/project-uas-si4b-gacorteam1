<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kunjungan extends Model
{
    use HasFactory; 
    protected $fillable = ['pasien_id','tanggal_kunjungan', 'dokter_id', 'obat_id', 'harga','diagnosa','no_urut'];

    public function dokter(){
        return $this->belongsTo(dokter::class, 'dokter_id');
    }

    public function pasien(){
        return $this->belongsTo(pasien::class, 'pasien_id');
    }

    public function obat(){
        return $this->belongsTo(obat::class, 'obat_id');
    }
}