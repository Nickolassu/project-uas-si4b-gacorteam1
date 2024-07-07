<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'spesialis','harga'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

}
