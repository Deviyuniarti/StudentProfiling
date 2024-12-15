<?php
namespace App\Http\Controllers;

use App\Models\InteraksiRekomendasi;
use Illuminate\Http\Request;

class InteraksiRekomendasiController extends Controller
{
    public function likeRekomendasi(Request $request)
    {
        // Validasi input
        $request->validate([
            'nim' => 'required|integer',
            'rekomendasi_id' => 'required|exists:rekomendasi_karir,id',
        ]);
        
        // Cek apakah interaksi sudah ada
        $interaksi = InteraksiRekomendasi::where('nim', $request->nim)
            ->where('rekomendasi_id', $request->rekomendasi_id)
            ->first();
        
        if ($interaksi) {
            // Jika sudah ada, ubah status like
            $interaksi->update(['suka' => true]);
        } else {
            // Jika belum ada, buat interaksi baru
            InteraksiRekomendasi::create([
                'nim' => $request->nim,
                'rekomendasi_id' => $request->rekomendasi_id,
                'suka' => true,
            ]);
        }

        return response()->json(['message' => 'Rekomendasi berhasil disukai!'], 200);
    }

    public function unLikeRekomendasi(Request $request)
    {
        // Validasi input
        $request->validate([
            'nim' => 'required|integer',
            'rekomendasi_id' => 'required|exists:rekomendasi_karir,id',
        ]);

        // Cek apakah interaksi sudah ada
        $interaksi = InteraksiRekomendasi::where('nim', $request->nim)
            ->where('rekomendasi_id', $request->rekomendasi_id)
            ->first();

        if ($interaksi) {
            // Jika ada, hapus like
            $interaksi->update(['suka' => false]);
        }

        return response()->json(['message' => 'Rekomendasi like dibatalkan!'], 200);
    }
}
