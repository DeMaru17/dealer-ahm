<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GambarMotor extends Model
{
    use HasFactory;
    protected $table = 'gambar_motor';
    protected $fillable = [
        'id_motor',
        'gambar_1',
        'gambar_2',
        'gambar_3',

    ];

    public function  motor()
    {
        return $this->belongsTo(Motor::class, 'id_motor', 'id');
    }
}
