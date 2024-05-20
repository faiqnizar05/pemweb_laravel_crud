<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periksa extends Model
{
    use HasFactory;


    // Kolom yang dapat diisi
    protected $fillable = [
        'pasien_id',
        'dokter_id',
        'tanggal',
        'berat',
        'tinggi',
        'tensi',
        'keterangan',
       
    ];
}
