<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Motor;
use App\Models\SpesifikasiDimensi;
use RealRashid\SweetAlert\Facades\Alert;

class DimensiMotorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $spekDimensi = SpesifikasiDimensi::with('motor')->get();

        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('dimensi-motor.index', compact('spekDimensi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $motor = Motor::all();
        return view('dimensi-motor.create', compact('motor'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $existingDimensiMotor = SpesifikasiDimensi::where('id_motor', $request->input('nama_motor'))->first();
        // dd($existingDimensiMotor);

        if (!$existingDimensiMotor) {
            $request->validate([
                'plt' =>  'nullable',
                'jarak_sumbu_roda' =>  'nullable',
                'jarak_terendah' =>  'nullable',
                'ketinggian_duduk' =>  'nullable',
                'berat_kosong' => 'nullable',
            ]);

            $data['id_motor'] = $request->input('nama_motor');
            $data['panjangxlebarxtinggi'] = $request->input('plt');
            $data['jarak_sumbu_roda'] = $request->input('jarak_sumbu_roda');
            $data['jarak_terendah_ke_tanah'] = $request->input('jarak_terendah');
            $data['ketinggian_tempat_duduk'] = $request->input('ketinggian_duduk');
            $data['berat_kosong'] = $request->input('berat_kosong');

            SpesifikasiDimensi::create($data);
            Alert::success('Success', 'Data Berhasil Ditambahkan');
            return redirect()->route('dimensi.index');
        } else {
            // Jika data gambar motor sudah ada, lakukan update data
            Alert::error('Error', 'Data motor sudah ada di database. Silakan coba lagi dengan data motor yang berbeda.');
            return redirect()->route('dimensi.index');
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
        $dimensi =  SpesifikasiDimensi::with('motor')->findOrFail($id);
        return view('dimensi-motor.edit', compact('dimensi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dimensi = SpesifikasiDimensi::with('motor')->findOrFail($id);
        $request->validate([
            'plt' =>  'nullable',
            'jarak_sumbu_roda' =>  'nullable',
            'jarak_terendah' =>  'nullable',
            'ketinggian_duduk' =>  'nullable',
            'berat_kosong' => 'nullable',
        ]);
        $data['panjangxlebarxtinggi'] = $request->input('plt');
        $data['jarak_sumbu_roda'] = $request->input('jarak_sumbu_roda');
        $data['jarak_terendah_ke_tanah'] = $request->input('jarak_terendah');
        $data['ketinggian_tempat_duduk'] = $request->input('ketinggian_duduk');
        $data['berat_kosong'] = $request->input('berat_kosong');

        $dimensi->update($data);
        Alert::success('Success', 'Data Berhasil Diupdate');
        return redirect()->route('dimensi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        SpesifikasiDimensi::where('id', $id)->delete();
        Alert::success('Success', 'Data Berhasil Dihapus');
        return redirect()->route('dimensi.index');
    }
}
