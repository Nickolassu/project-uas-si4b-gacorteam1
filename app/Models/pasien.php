<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'kelamin', 'no_hp', 'tanggal_lahir', 'alamat', 'keluhan', 'diagnosa'];

    public function pasien(){
        return $this->belongsTo(kunjungan::class, 'pasien_id');
    }
}
