<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kapasitas extends Model
{
    use HasFactory;
    protected $table = 'kapasitas';
    protected $fillable = [
        'id_motor',
        'kapasitas_tangki_bahan_bakar',
        'kapasitas_minyak_pelumas',

    ];
    public function motor(){
        return $this->belongsTo(Motor::class, 'id_motor', 'id');
    }
}
