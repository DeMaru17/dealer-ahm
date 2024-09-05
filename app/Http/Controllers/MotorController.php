<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use App\Models\GambarMotor;
use App\Models\SpesifikasiDimensi;
use App\Models\SpesifikasiMesin;
use App\Models\Rangka;
use App\Models\Kapasitas;
use App\Models\Kelistrikan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class MotorController extends Controller
{
    // Method untuk menampilkan daftar motor
    public function index()
    {
        // Mengambil semua data motor dengan relasinya
        // $motor = Motor::with([
        //     'gambarMotor',
        //     'spesifikasiDimensi',
        //     'spesifikasiMesin',
        //     'rangka',
        //     'kapasitas',
        //     'kelistrikan'
        // ])->get();
        $motor = Motor::all();
        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('motor.index',  compact('motor'));
    }

    // Method untuk menampilkan form create motor
    public function create()
    {
        return view('motor.create');
    }

    // Method untuk menyimpan data motor baru
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_motor' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'harga_motor' => 'required|numeric',
            'deskripsi' => 'required|string',
            // Lakukan validasi untuk gambar dan spesifikasi lainnya jika diperlukan
        ]);

        // Lakukan proses penyimpanan data motor baru
        $motor = Motor::create($validatedData);
        Alert::success('Success', 'Data Berhasil Ditambahkan');
        return redirect()->route('motor.index')->with('success', 'Motor berhasil ditambahkan.');
    }

    // Method untuk menampilkan detail motor
    public function show($id) {}

    // Method untuk menampilkan form edit motor
    public function edit($id)
    {
        $motor = Motor::findOrFail($id);
        return view('motor.edit', compact('motor'));
    }

    // Method untuk mengupdate data motor
    public function update(Request $request, $id)
    {
        Motor::where('id', $id)->update([
            'nama_motor' => $request->nama_motor,
            'kategori' => $request->kategori,
            'harga_motor' => $request->harga_motor,
            'deskripsi' => $request->deskripsi,
        ]);
        Alert::success('Success', 'Data Berhasil Diedit');
        return redirect()->to('motor')->with('success', 'Motor berhasil diupdate.');
    }

    // Method untuk menghapus motor
    public function destroy($id)
    {
        Motor::where('id', $id)->delete();
        Alert::success('Success', 'Data Berhasil Dihapus');
        return redirect()->to('motor')->with('success', 'Motor berhasil dihapus.');
    }
}
