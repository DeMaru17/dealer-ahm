<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelistrikan extends Model
{
    use HasFactory;
    protected $table = 'kelistrikan';
    protected $fillable = [
        'id_motor',
        'tipe_baterai_atau_aki',
        'sistem_pengapian',
        'tipe_busi',
        'power_charger',
    ];

    public function motor()
    {
        return $this->belongsTo(Motor::class, 'id_motor', 'id');
    }
}
