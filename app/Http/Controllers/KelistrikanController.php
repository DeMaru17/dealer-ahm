<?php

namespace App\Http\Controllers;

use App\Models\Kelistrikan;
use Illuminate\Http\Request;
use App\Models\Motor;
use RealRashid\SweetAlert\Facades\Alert;

class KelistrikanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelistrikan = Kelistrikan::with('motor')->get();

        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('kelistrikan.index', compact('kelistrikan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $motor =  Motor::all();
        return view('kelistrikan.create', compact('motor'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $existinglistrikMotor = Kelistrikan::where('id_motor', $request->input('nama_motor'))->first();
        if (!$existinglistrikMotor) {
            // Validate the input data
            $request->validate([
                'nama_motor' => 'required',
                'tipe_aki' => 'nullable|string',
                'sistem_pengapian' => 'nullable|string',
                'tipe_busi' => 'nullable|string',
                'power_charger' => 'nullable|string',
            ]);

            // Create a new instance of your model (e.g., Kelistrikan)
            $kelistrikan = new Kelistrikan();

            // Assign the input data to the model
            $kelistrikan->id_motor = $request->input('nama_motor');
            $kelistrikan->tipe_baterai_atau_aki = $request->input('tipe_aki');
            $kelistrikan->sistem_pengapian = $request->input('sistem_pengapian');
            $kelistrikan->tipe_busi = $request->input('tipe_busi');
            $kelistrikan->power_charger = $request->input('power_charger');

            // Save the model instance
            $kelistrikan->save();

            // Redirect ke halaman index
            Alert::success('Success', 'Data Berhasil Ditambahkan');
            return redirect()->route('kelistrikan.index')->with('success', 'Data berhasil disimpan!');
        } else {
            // Jika data gambar motor sudah ada, lakukan update data
            Alert::error('Error', 'Data motor sudah ada di database. Silakan coba lagi dengan data motor yang berbeda.');
            return redirect()->route('kelistrikan.index');
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
        $kelistrikan = Kelistrikan::with('motor')->findOrFail($id);
        return view('kelistrikan.edit', compact('kelistrikan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Cari data kelistrikan berdasarkan id
        $kelistrikan = Kelistrikan::with('motor')->findOrFail($id);

        // Validate the input data
        $request->validate([
            'nama_motor' => 'required',
            'tipe_aki' => 'nullable|string',
            'sistem_pengapian' => 'nullable|string',
            'tipe_busi' => 'nullable|string',
            'power_charger' => 'nullable|string',
        ]);

        // Assign the input data to the model
        $data['tipe_baterai_atau_aki'] = $request->input('tipe_aki');
        $data['sistem_pengapian'] = $request->input('sistem_pengapian');
        $data['tipe_busi'] = $request->input('tipe_busi');
        $data['power_charger'] = $request->input('power_charger');

        // Save the model instance
        $kelistrikan->update($data);

        // Redirect ke halaman index
        Alert::success('Success', 'Data Berhasil Diupdate');
        return redirect()->route('kelistrikan.index')->with('success', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Kelistrikan::where('id', $id)->delete();
        Alert::success('Success', 'Data Berhasil Dihapus');
        return redirect()->route('kelistrikan.index');
    }
}
