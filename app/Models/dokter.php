<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'spesialis','harga'];

    public function pasiens(){
        return $this->belongsTo(pasien::class, 'dokter_id');
    }

}
