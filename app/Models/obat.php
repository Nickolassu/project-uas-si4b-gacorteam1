<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class obat extends Model
{
    use HasFactory;
    protected $fillable = ['nama_obat', 'deskripsi', 'stok', 'dosis'];

    public function pasiens(){
        return $this->belongsTo(pasien::class, 'obat_id');
    }
}
