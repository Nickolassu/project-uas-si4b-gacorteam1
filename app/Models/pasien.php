<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'kelamin', 'no_hp', 'tanggal_lahir', 'alamat', 'dokter_id', 'kunjungan_id', 'obat_id', 'harga'];

    public function dokter(){
        return $this->belongsTo(dokter::class, 'dokter_id');
    }

    public function kunjungan(){
        return $this->belongsTo(kunjungan::class, 'kunjungan_id');
    }

    public function obat(){
        return $this->belongsTo(obat::class, 'obat_id');
    }
}
