<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use Illuminate\Http\Request;
use App\Models\Rangka;
use RealRashid\SweetAlert\Facades\Alert;


class RangkaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rangka = Rangka::with('motor')->get();

        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('rangka.index', compact('rangka'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rangka = Motor::all();
        return view('rangka.create', compact('rangka'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $existingRangkaMotor = Rangka::where('id_motor', $request->input('nama_motor'))->first();

        if (!$existingRangkaMotor) {
            // Validasi data
            $validatedData = $request->validate([
                'nama_motor' => 'required',
                'tipe_rangka' => 'nullable',
                'tipe_suspensi_depan' => 'nullable',
                'tipe_suspensi_belakang' => 'nullable',
                'ukuran_ban_depan' => 'nullable',
                'ukuran_ban_belakang' => 'nullable',
                'tipe_rem_depan' => 'nullable',
                'tipe_rem_belakang' => 'nullable',
                'sistem_pengereman' => 'nullable',
            ]);

            // Simpan data ke database
            $rangka = new Rangka();
            $rangka->id_motor = $validatedData['nama_motor'];
            $rangka->tipe_rangka = $validatedData['tipe_rangka'];
            $rangka->tipe_suspensi_depan = $validatedData['tipe_suspensi_depan'];
            $rangka->tipe_suspensi_belakang = $validatedData['tipe_suspensi_belakang'];
            $rangka->ukuran_ban_depan = $validatedData['ukuran_ban_depan'];
            $rangka->ukuran_ban_belakang = $validatedData['ukuran_ban_belakang'];
            $rangka->tipe_rem_depan = $validatedData['tipe_rem_depan'];
            $rangka->tipe_rem_belakang = $validatedData['tipe_rem_belakang'];
            $rangka->sistem_pengereman = $validatedData['sistem_pengereman'];
            $rangka->save();

            // Redirect ke halaman index
            Alert::success('Success', 'Data Berhasil Ditambahkan');
            return redirect()->route('rangka.index')->with('success', 'Data berhasil disimpan!');
        } else {
            // Jika data gambar motor sudah ada, lakukan update data
            Alert::error('Error', 'Data motor sudah ada di database. Silakan coba lagi dengan data motor yang berbeda.');
            return redirect()->route('rangka.index');
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
        $rangka =  Rangka::with('motor')->findOrFail($id);
        return view('rangka.edit', compact('rangka'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Cari data rangka yang akan diupdate
        $rangka = Rangka::with('motor')->findOrFail($id);

        // Validasi data
        $request->validate([
            'nama_motor' => 'required',
            'tipe_rangka' => 'nullable',
            'tipe_suspensi_depan' => 'nullable',
            'tipe_suspensi_belakang' => 'nullable',
            'ukuran_ban_depan' => 'nullable',
            'ukuran_ban_belakang' => 'nullable',
            'tipe_rem_depan' => 'nullable',
            'tipe_rem_belakang' => 'nullable',
            'sistem_pengereman' => 'nullable'
        ]);

        $data['tipe_rangka'] = $request->input('tipe_rangka');
        $data['tipe_suspensi_depan'] = $request->input('tipe_suspensi_depan');
        $data['tipe_suspensi_belakang'] = $request->input('tipe_suspensi_belakang');
        $data['ukuran_ban_depan'] = $request->input('ukuran_ban_depan');
        $data['ukuran_ban_belakang'] = $request->input('ukuran_ban_belakang');
        $data['tipe_rem_depan'] = $request->input('tipe_rem_depan');
        $data['tipe_rem_belakang'] = $request->input('tipe_rem_belakang');
        $data['sistem_pengereman'] = $request->input('sistem_pengereman');
        $rangka->update($data);

        // Redirect ke halaman index
        Alert::success('Success', 'Data Berhasil Diupdate');
        return redirect()->route('rangka.index')->with('success', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Rangka::where('id', $id)->delete();
        Alert::success('Success', 'Data Berhasil Dihapus');
        return redirect()->route('rangka.index');
    }
}
