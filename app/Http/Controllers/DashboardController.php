<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motor;
use App\Models\Galeri;

class DashboardController extends Controller
{
    public function index()
    {
        $motor = Motor::with('series', 'gambarMotor', 'rangka', 'mesin', 'dimensiMotor', 'kapasitas', 'kelistrikan')->get();
        $galeri = Galeri::all();

        return view('dashboard.index', compact('motor', 'galeri'));
    }

    public function detail(string $nama_motor)
    {
        $nama_motor = str_replace('-', ' ', $nama_motor);
        $motor = Motor::where('nama_motor', $nama_motor)
            ->with('series', 'gambarMotor', 'rangka', 'mesin', 'dimensiMotor', 'kapasitas', 'kelistrikan')
            ->firstOrFail();
        $gambar_motor = Motor::with('gambarMotor')->get();
        $series = $motor->series;



        return view('dashboard.detail', compact('gambar_motor', 'motor', 'series'));
    }

    public function catalogue()
    {
        $motor = Motor::with('series', 'gambarMotor', 'rangka', 'mesin', 'dimensiMotor', 'kapasitas', 'kelistrikan')->get();

        return view('dashboard.catalogue', compact('motor'));
    }
}
