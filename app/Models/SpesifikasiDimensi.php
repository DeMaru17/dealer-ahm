<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpesifikasiDimensi extends Model
{
    use HasFactory;
    protected $table = 'spesifikasi_dimensi';
    protected $fillable = [
        'id_motor',
        'panjangxlebarxtinggi',
        'jarak_sumbu_roda',
        'jarak_terendah_ke_tanah',
        'ketinggian_tempat_duduk',
        'berat_kosong'
    ];

    public function motor()
    {
        return $this->belongsTo(Motor::class, 'id_motor', 'id');
    }
}
