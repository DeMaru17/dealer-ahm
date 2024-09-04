<?php

namespace App\Http\Controllers;

use App\Models\Motor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\GambarMotor;
use Illuminate\Support\Facades\File;


class GambarMotorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gambar = GambarMotor::with('motor')->get();
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
            'gambar1' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'gambar2' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'gambar3' => 'required|image|mimes:jpg,jpeg,png|max:2048',
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
            'gambar_1' => $request->file('gambar1'),
            'gambar_2' => $request->file('gambar2'),
            'gambar_3' => $request->file('gambar3'),
        ];

        // Save each image in the corresponding folder
        foreach ($images as $field => $image) {
            // Generate a unique filename
            $filename = $image->getClientOriginalName();
            // Save the image to the specified folder
            $path = $image->storeAs($folder_path, $filename);
            // Remove the 'public/' prefix to store the relative path in the database
            $gambar_motor->{$field} = str_replace('public/', '', $path);
        }

        // Save the GambarMotor instance
        $gambar_motor->save();

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
        //
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

    // In your controller
    public function getMotorByKategori(Request $request)
    {
        $kategori_motor = $request->input('kategori_motor');
        $motor = Motor::where('kategori', $kategori_motor)->get();
        return response()->json($motor);
    }
}
