<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\GambarMotor;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;



class GambarMotorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gambar = GambarMotor::with('motor')->get();

        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);

        return view('gambar-motor.index', compact('gambar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $motor = Motor::all();
        return view('gambar-motor.create', compact('motor'));
    }

    /**
     * Store a newly created resource in storage.
     */


    public function store(Request $request)
    {
        $request->validate([
            'nama_motor' => 'required|exists:motor,id', // Validate that nama_motor is a valid motor ID
            'gambar_produk' => 'image|mimes:jpg,jpeg,png|max:2048',
            'gambar_carousel1' => 'nullable|image|mimes:jpg,jpeg,png|max:5000',
            'gambar_carousel2' => 'nullable|image|mimes:jpg,jpeg,png|max:5000',
            'gambar_carousel3' => 'nullable|image|mimes:jpg,jpeg,png|max:5000',
            'gambar1' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'gambar2' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'gambar3' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'gambar4' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'gambar5' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'gambar6' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'gambar7' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'gambar8' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Find the Motor by ID
        $motor = Motor::find($request->input('nama_motor'));

        if (!$motor) {
            return redirect()->back()->withErrors('Motor tidak ditemukan.');
        }

        // Create a new GambarMotor instance
        $gambar_motor = new GambarMotor();
        $gambar_motor->id_motor = $motor->id; // Set the motor ID

        // Create folder with motor name
        $folder_name = Str::slug($motor->nama_motor); // Use the motor name as the folder name
        $folder_path = 'public/image/' . $folder_name;

        // Create the directory if it doesn't exist
        if (!Storage::exists($folder_path)) {
            Storage::makeDirectory($folder_path);
        }

        // Get the uploaded images
        $images = [
            'gambar_produk' => $request->file('gambar_produk'),
            'gambar_carousel1' => $request->file('gambar_carousel1'),
            'gambar_carousel2' => $request->file('gambar_carousel2'),
            'gambar_carousel3' => $request->file('gambar_carousel3'),
            'gambar_1' => $request->file('gambar1'),
            'gambar_2' => $request->file('gambar2'),
            'gambar_3' => $request->file('gambar3'),
            'gambar_4' => $request->file('gambar4'),
            'gambar_5' => $request->file('gambar5'),
            'gambar_6' => $request->file('gambar6'),
            'gambar_7' => $request->file('gambar7'),
            'gambar_8' => $request->file('gambar8'),
        ];

        // Save each image in the corresponding folder
        foreach ($images as $field => $image) {
            if ($image) {
                // Generate a unique filename
                $filename = $image->getClientOriginalName();
                // Save the image to the specified folder
                $path = $image->storeAs($folder_path, $filename);
                // Remove the 'public/' prefix to store the relative path in the database
                $gambar_motor->{$field} = str_replace('public/', '', $path);
            }
        }

        // Save the GambarMotor instance
        $gambar_motor->save();
        Alert::success('Success', 'Data Berhasil Ditambahkan');

        // Redirect to a success page or display a success message
        return redirect()->route('gambar-motor.index')->with('success', 'Data gambar motor berhasil ditambahkan!');
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
        $gambar = GambarMotor::with('motor')->findOrFail($id);
        return view('gambar-motor.edit', compact('gambar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {


        $gambar = GambarMotor::with('motor')->findOrFail($id);

        $request->validate([
            'kategori_motor' => 'required',
            'nama_motor' => 'required',
            'gambar_produk' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'gambar_carousel1' => 'nullable|image|mimes:jpg,jpeg,png|max:5000',
            'gambar_carousel2' => 'nullable|image|mimes:jpg,jpeg,png|max:5000',
            'gambar_carousel3' => 'nullable|image|mimes:jpg,jpeg,png|max:5000',
            'gambar1' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'gambar2' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'gambar3' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'gambar4' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'gambar5' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'gambar6' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'gambar7' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'gambar8' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Create folder with motor name
        $folder_name = Str::slug($gambar->motor->nama_motor); // Use the motor name as the folder name
        $folder_path = 'public/image/' . $folder_name;

        // Create the directory if it doesn't exist
        if (!Storage::exists($folder_path)) {
            Storage::makeDirectory($folder_path);
        }

        // Get the uploaded images
        $images = [
            'gambar_produk' => $request->file('gambar_produk'),
            'gambar_carousel1' => $request->file('gambar_carousel1'),
            'gambar_carousel2' => $request->file('gambar_carousel2'),
            'gambar_carousel3' => $request->file('gambar_carousel3'),
            'gambar_1' => $request->file('gambar1'),
            'gambar_2' => $request->file('gambar2'),
            'gambar_3' => $request->file('gambar3'),
            'gambar_4' => $request->file('gambar4'),
            'gambar_5' => $request->file('gambar5'),
            'gambar_6' => $request->file('gambar6'),
            'gambar_7' => $request->file('gambar7'),
            'gambar_8' => $request->file('gambar8'),
        ];

        // Save each image in the corresponding folder
        foreach ($images as $field => $image) {
            if ($image) {
                // Delete the old image
                if ($gambar->{$field}) {
                    Storage::delete('public/' . $gambar->{$field});
                }

                // Generate a unique filename
                $filename = $image->getClientOriginalName();
                // Save the image to the specified folder
                $path = $image->storeAs($folder_path, $filename);
                // Remove the 'public/' prefix to store the relative path in the database
                $gambar->{$field} = str_replace('public/', '', $path);
            }
        }

        // Save the GambarMotor instance
        $gambar->save();
        Alert::success('Success', 'Data Berhasil Diedit');

        // Redirect to a success page or display a success message
        return redirect()->route('gambar-motor.index')->with('success', 'Data gambar motor berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gambar = GambarMotor::with('motor')->findOrFail($id);

        // Delete the folder and its contents
        $folder_name = Str::slug($gambar->motor->nama_motor);
        $folder_path = 'public/image/' . $folder_name;
        Storage::deleteDirectory($folder_path, true);

        // Delete the images associated with the GambarMotor instance
        foreach ($gambar->getAttributes() as $field => $value) {
            if (in_array($field, ['gambar_produk', 'gambar_carousel1', 'gambar_carousel2', 'gambar_carousel3', 'gambar1', 'gambar2', 'gambar3', 'gambar4', 'gambar5', 'gambar6', 'gambar7', 'gambar8'])) {
                if ($value) {
                    Storage::delete('public/' . $value);
                }
            }
        }

        // Delete the GambarMotor instance
        $gambar->delete();
        Alert::success('Success', 'Data Berhasil Dihapus');

        // Redirect to a success page or display a success message
        return redirect()->route('gambar-motor.index')->with('success', 'Data gambar motor berhasil dihapus!');
    }

    // In your controller
    public function getMotorByKategori(Request $request)
    {
        $kategori_motor = $request->input('kategori_motor');
        $motor = Motor::where('kategori', $kategori_motor)->get();
        return response()->json($motor);
    }
}
