<?php

namespace App\Http\Controllers;

use App\Models\Periksa;
use Illuminate\Http\Request;

class PeriksaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
{
    // Mengambil semua data periksa
    $list_periksa = Periksa::all();
    \Log::info($list_periksa); // Log the data to see if it is fetched correctly
    return view('periksa.index', compact('list_periksa'));
}

public function create()
{
    // Return the view for creating a new pasien
    return view('periksa.create');
}

public function store(Request $request)
{
    // Validate the incoming request data
    $request->validate([
        'pasien_id' => 'required|string',
        'dokter_id' => 'required|string',
        'tanggal' => 'required|date',
        'berat' => 'required|string',
        'tinggi' => 'required|string',
        'tensi' => 'required|string',
    ]);

    // Create a new Periksa record using the request data
    Periksa::create([
        'pasien_id' => $request->pasien_id,
        'dokter_id' => $request->dokter_id,
        'tanggal' => $request->tanggal,
        'berat' => $request->berat,
        'tinggi' => $request->tinggi,
        'tensi' => $request->tensi,
    ]);

    return redirect()->route('periksa.index')->with('success', 'Periksa created successfully.');
}
 

public function show(Periksa $periksa)
    {
        // Pass the Pasien instance to the view
        return view('periksa.show', compact('periksa'));
    }

    public function edit(Periksa $periksa)
    {
        // Pass the Pasien instance to the view
        return view('periksa.edit', compact('periksa'));
    }

    public function update(Request $request, Periksa $periksa)
    {

        // Update the Pasien instance
        $periksa->update($request->all());

        // Redirect to the index page with a success message
        return redirect()->route('periksa.index')->with('success', 'Periksa updated successfully');
    }

    public function destroy(Periksa $periksa)
    {
        // Delete the Pasien instance
        $periksa->delete();

        // Redirect back to the index page with a success message
        return redirect()->route('periksa.index')->with('success', 'Periksas deleted successfully');
    }
}
