<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rangka extends Model
{
    use HasFactory;

    protected $table = 'rangka';
    protected $fillable = [
        'id_motor',
        'tipe_rangka',
        'tipe_suspensi_depan',
        'tipe_suspensi_belakang',
        'ukuran_ban_depan',
        'ukuran_ban_belakang',
        'tipe_rem_depan',
        'tipe_rem_belakang',
        'sistem_pengereman',
    ];

    public function  motor()
    {
        return $this->belongsTo(Motor::class, 'id_motor', 'id');
    }
}
