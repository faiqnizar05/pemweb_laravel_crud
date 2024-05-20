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

}
