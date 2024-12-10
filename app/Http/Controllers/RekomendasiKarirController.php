<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InteraksiRekomendasi;
use App\Models\RekomendasiKarir;

class RekomendasiKarirController extends Controller
{
    public function index()
    {
        $rekomendasi_karir = RekomendasiKarir::all();
        return view('pages.mahasiswa.rekomendasi_karir', compact('rekomendasi_karir'));
    }

    public function like(Request $request)
    {
        $request->validate([
            'rekomendasi_id' => 'required|exists:rekomendasi_karir,id'
        ]);

        $nim = auth()->user()->nim; // Mahasiswa yang sedang login
        $rekomendasiId = $request->rekomendasi_id;

        // Cek apakah sudah ada interaksi
        $interaksi = InteraksiRekomendasi::where('nim', $nim)
            ->where('rekomendasi_id', $rekomendasiId)
            ->first();

        if ($interaksi) {
            // Toggle status suka
            $interaksi->suka = !$interaksi->suka;
            $interaksi->save();
        } else {
            // Tambahkan interaksi baru
            InteraksiRekomendasi::create([
                'nim' => $nim,
                'rekomendasi_id' => $rekomendasiId,
                'suka' => true
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Status suka berhasil diperbarui.'
        ]);
    }
}
