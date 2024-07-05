<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    use HasFactory;
    protected $fillable = ['nama','dokter_id', 'kelamin', 'no_hp', 'tanggal_lahir', 'alamat', 'keluhan'];

    public function dokter(){
        return $this->belongsTo(dokter::class, 'dokter_id');
    }
}
