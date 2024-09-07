<?php

namespace App\Http\Controllers;

use App\Models\Kapasitas;
use Illuminate\Http\Request;
use App\Models\Motor;
use RealRashid\SweetAlert\Facades\Alert;

class KapasitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kapasitas = Kapasitas::with('motor')->get();

        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('kapasitas.index', compact('kapasitas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $motor = Motor::all();
        return view('kapasitas.create', compact('motor'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $existingKapasitasMotor = Kapasitas::where('id_motor', $request->input('nama_motor'))->first();

        if (!$existingKapasitasMotor) {
            $request->validate([
                'nama_motor' => 'required',
                'kapasitas_tangki_bahan_bakar' => 'nullable|string',
                'kapasitas_minyak_pelumas' => 'nullable|string',
            ]);
            $data['id_motor'] = $request->input('nama_motor');
            $data['kapasitas_tangki_bahan_bakar'] = $request->input('kapasitas_tangki_bahan_bakar');
            $data['kapasitas_minyak_pelumas'] = $request->input('kapasitas_minyak_pelumas');
            Kapasitas::create($data);

            Alert::success('Success', 'Data Berhasil Ditambahkan');
            return redirect()->route('kapasitas.index')->with('success', 'Data berhasil disimpan!');
        } else {
            // Jika data gambar motor sudah ada, lakukan update data
            Alert::error('Error', 'Data motor sudah ada di database. Silakan coba lagi dengan data motor yang berbeda.');
            return redirect()->route('kapasitas.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kapasitas = Kapasitas::with('motor')->findOrFail($id);
        return view('kapasitas.edit', compact('kapasitas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kapasitas = Kapasitas::with('motor')->findOrFail($id);

        $request->validate([
            'kapasitas_tangki_bahan_bakar' => 'nullable|string',
            'kapasitas_minyak_pelumas' => 'nullable|string',
        ]);

        $data['kapasitas_tangki_bahan_bakar'] = $request->input('kapasitas_tangki_bahan_bakar');
        $data['kapasitas_minyak_pelumas'] = $request->input('kapasitas_minyak_pelumas');

        $kapasitas->update($data);

        Alert::success('Success', 'Data Berhasil Diupdate');
        return redirect()->route('kapasitas.index')->with('success', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Kapasitas::where('id', $id)->delete();
        Alert::success('Success', 'Data Berhasil Dihapus');
        return redirect()->route('kapasitas.index');
    }
}
