<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeriesMotor extends Model
{
    use HasFactory;
    protected $table = 'series_motor';
    protected $fillable = [
        'motor_id',
        'nama_series',
        'harga',
    ];
    public function motor()
    {
        return $this->belongsTo(Motor::class, 'motor_id', 'id');
    }
}
