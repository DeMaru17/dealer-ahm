<?php

namespace App\Http\Controllers;

use App\Models\Kapasitas;
use Illuminate\Http\Request;
use App\Models\Motor;

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
        //
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
}
