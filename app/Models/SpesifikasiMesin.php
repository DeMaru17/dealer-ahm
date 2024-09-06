<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpesifikasiMesin extends Model
{
    use HasFactory;
    protected $table = 'spesifikasi_mesin';
    protected $fillable = [
        'id_motor',
        'tipe_mesin',
        'tipe_transmisi',
        'tipe_kopling',
        'tipe_starter',
        'diameter_x_langkah',
        'volume_langkah',
        'daya_maksimum',
        'torsi_maksimum',
        'busi',
        'sistem_bahan_bakar',
        'pengapian',
        'tipe_pendingin',
        'perbandingan_kompresi',
        'pola_perpindahan_gigi',
        'jenis_pelumas',
    ];
    
    public function  motor()
    {
        return $this->belongsTo(Motor::class, 'id_motor', 'id');
    }


}
