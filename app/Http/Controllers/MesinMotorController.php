<?php

namespace App\Http\Controllers;

use App\Models\SpesifikasiMesin;
use Illuminate\Http\Request;
use App\Models\Motor;
use RealRashid\SweetAlert\Facades\Alert;

class MesinMotorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mesin = SpesifikasiMesin::with('motor')->get();
        return view('mesin-motor.index', compact('mesin'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $motor = Motor::all();
        return view('mesin-motor.create', compact('motor'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $existingMesinMotor = SpesifikasiMesin::where('id_motor', $request->input('nama_motor'))->first();

        if (!$existingMesinMotor){
            $request->validate([
                'tipe_mesin' => 'nullable',
                'tipe_transmisi' => 'nullable',
                'tipe_kopling' => 'nullable',
                'tipe_starter' => 'nullable',
                'diameterxlangkah' => 'nullable',
                'volume_langkah' => 'nullable',
                'daya_maksimum' => 'nullable',
                'torsi_maksimum' => 'nullable',
                'busi' => 'nullable',
                'sistem_bahan_bakar' => 'nullable',
                'pengapian' => 'nullable',
                'tipe_pendingin' => 'nullable',
                'perbandingan_kompresi' => 'nullable',
                'pola_perpindahan_gigi'=> 'nullable',
                'jenis_pelumas'=> 'nullable',
            ]);

            $data['id_motor'] = $request->input('nama_motor');
            $data['tipe_mesin'] = $request->input('tipe_mesin');
            $data['tipe_transmisi'] = $request->input('tipe_transmisi');
            $data['tipe_kopling'] = $request->input('tipe_kopling');
            $data['tipe_starter'] = $request->input('tipe_starter');
            $data['diameterxlangkah'] = $request->input('diameterxlangkah');
            $data['volume_langkah'] = $request->input('volume_langkah');
            $data['daya_maksimum'] = $request->input('daya_maksimum');
            $data['torsi_maksimum'] = $request->input('torsi_maksimum');
            $data['busi'] = $request->input('busi');
            $data['sistem_bahan_bakar'] = $request->input('sistem_bahan_bakar');
            $data['pengapian'] = $request->input('pengapian');
            $data['tipe_pendingin'] = $request->input('tipe_pendingin');
            $data['perbandingan_kompresi'] = $request->input('perbandingan_kompresi');
            $data['pola_perpindahan_gigi'] = $request->input('pola_perpindahan_gigi');
            $data['jenis_pelumas'] = $request->input('jenis_pelumas');


            SpesifikasiMesin::create($data);
            Alert::success('Success', 'Data Berhasil Ditambahkan');
            return redirect()->route('mesin.index');
        } else {
            // Jika data gambar motor sudah ada, lakukan update data
            Alert::error('Error', 'Data motor sudah ada di database. Silakan coba lagi dengan data motor yang berbeda.');
            return redirect()->route('mesin.index');
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
        $mesin = SpesifikasiMesin::with('motor')->findOrFail($id);
        return view('mesin-motor.edit', compact('mesin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
