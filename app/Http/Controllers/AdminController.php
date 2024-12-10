<?php

namespace App\Http\Controllers;

use App\Models\RekomendasiKarir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function createRecommendation()
    {
        // Admin menambahkan rekomendasi karir
        return view('admin.rekomendasi_karir');
    }

    public function storeRecommendation(Request $request)
    {
        // Validasi dan simpan rekomendasi karir
        $request->validate([
            'jalur_karir' => 'required|string',
            'profesi_id' => 'required|exists:profesi,id',
            'deskripsi' => 'required|string',
            // Kolom lainnya...
        ]);

        RekomendasiKarir::create([
            'jalur_karir' => $request->jalur_karir,
            'profesi_id' => $request->profesi_id,
            'deskripsi' => $request->deskripsi,
            'created_by_type' => 'admin',
            'created_by_id' => Auth::id(), // ID user yang login
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Rekomendasi berhasil ditambahkan');
    }
}
