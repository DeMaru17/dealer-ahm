<?php

namespace App\Http\Controllers;

use App\Models\SeriesMotor;
use Illuminate\Http\Request;
use App\Models\Motor;
use RealRashid\SweetAlert\Facades\Alert;

class SeriesMotorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $series = SeriesMotor::with('motor')->get();

        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('series.index', compact('series'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $motor =  Motor::all();
        return view('series.create', compact('motor'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_motor' => 'required',
            'nama_series' => 'required',
            'harga' => 'required',
        ]);
        $data['motor_id'] = $request->input('nama_motor');
        $data['nama_series'] = $request->input('nama_series');
        $data['harga'] = $request->input('harga');

        SeriesMotor::create($data);
        Alert::success('Success', 'Data Berhasil Ditambahkan');
        return redirect()->route('series.index');
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
        $series = SeriesMotor::with('motor')->findOrFail($id);
        return view('series.edit', compact('series'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $series = SeriesMotor::with('motor')->findOrFail($id);

        $request->validate([
            'nama_series' => 'required',
            'harga' => 'required',
        ]);


        $data['nama_series'] = $request->input('nama_series');
        $data['harga'] = $request->input('harga');

        $series->update($data);

        Alert::success('Success', 'Data Berhasil Diupdate');
        return redirect()->route('series.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        SeriesMotor::where('id', $id)->delete();
        Alert::success('Success', 'Data Berhasil Dihapus');
        return redirect()->route('series.index');
    }
}
