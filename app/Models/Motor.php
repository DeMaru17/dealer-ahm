<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Motor extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'motor';

    // Atribut yang dapat diisi (fillable)
    protected $fillable = [
        'nama_motor',
        'kategori',
        'harga_motor',
        'deskripsi',
    ];

    public function series()
    {
        return $this->hasMany(SeriesMotor::class, 'motor_id', 'id');
    }

    public function gambarMotor(): HasOne
    {
        return $this->hasOne(GambarMotor::class, 'id_motor', 'id');
    }

    public function dimensiMotor(): HasOne
    {
        return $this->hasOne(SpesifikasiDimensi::class, 'id_motor', 'id');
    }

    public function mesin(): HasOne
    {
    return $this->hasOne(SpesifikasiMesin::class, 'id_motor', 'id');
    }

    public function rangka(): HasOne
    {
    return $this->hasOne(Rangka::class, 'id_motor', 'id');
    }

    public function kapasitas(): HasOne
    {
        return $this->hasOne(Kapasitas::class, 'id_motor', 'id');
    }

    public function kelistrikan(): HasOne
    {
        return $this->hasOne(Kelistrikan::class, 'id_motor', 'id');
    }




    // Relasi ke tabel GambarMotor
    // public function gambarMotor()
    // {
    //     return $this->hasMany(GambarMotor::class, 'id_motor');
    // }

    // // Relasi ke tabel SpesifikasiDimensi
    // public function spesifikasiDimensi()
    // {
    //     return $this->hasOne(SpesifikasiDimensi::class, 'id_motor');
    // }

    // // Relasi ke tabel SpesifikasiMesin
    // public function spesifikasiMesin()
    // {
    //     return $this->hasOne(SpesifikasiMesin::class, 'id_motor');
    // }

    // // Relasi ke tabel Rangka
    // public function rangka()
    // {
    //     return $this->hasOne(Rangka::class, 'id_motor');
    // }

    // // Relasi ke tabel Kapasitas
    // public function kapasitas()
    // {
    //     return $this->hasOne(Kapasitas::class, 'id_motor');
    // }

    // // Relasi ke tabel Kelistrikan
    // public function kelistrikan()
    // {
    //     return $this->hasOne(Kelistrikan::class, 'id_motor');
    // }
}
