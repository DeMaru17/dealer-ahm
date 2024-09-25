<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;
use RealRashid\SweetAlert\Facades\Alert;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galeri =  Galeri::all();

        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('galeri.index', compact('galeri'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $galeri = new Galeri();
        $galeri->foto = $request->file('foto')->store('galeri','public');
        $galeri->save();

        Alert::success('Success','Gambar berhasil disimpan');
        return redirect()->route('galeri.index')->with('success', 'Gallery item created successfully!');
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
        $galeri = Galeri::find($id);
        return view('galeri.edit', compact('galeri'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'foto' => 'image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $galeri = Galeri::find($id);
        if ($request->hasFile('foto')) {
            $galeri->foto = $request->file('foto')->store('galeri','public');
        }
        $galeri->save();
        Alert::success('Success','Gambar berhasil diupdate');
        return redirect()->route('galeri.index')->with('success', 'Gallery item updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Galeri::find($id)->delete();
        Alert::success('Success','Gambar berhasil dihapus');
        return redirect()->route('galeri.index')->with('success', 'Gallery item deleted successfully!');
    }
}
