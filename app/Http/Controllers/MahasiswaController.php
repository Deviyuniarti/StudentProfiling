<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\IPK;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MahasiswaController extends Controller
{
    /**
     * Menampilkan halaman dashboard mahasiswa setelah login
     */
    public function dashboard()
    {
        // Ambil nilai IPK dari database berdasarkan pengguna yang sedang login
        $ipk = IPK::where('nim', Auth::user()->nim)->orderBy('semester', 'desc')->first();

        // Periksa apakah data IPK ditemukan
        if ($ipk) {
            // Kembalikan view dengan data IPK
            return view('pages.mahasiswa.dashboard', compact('ipk'));
        } else {
            // Kembalikan view dengan pesan error
            return view('pages.mahasiswa.dashboard', ['error' => 'Data IPK tidak ditemukan']);
        }
    }

    /**
     * Ambil data IPK berdasarkan NIM dan semester
     */
    public function getIPK($nim, $semester)
    {
        // Cari data IPK untuk semester saat ini
        $ipk = IPK::where('nim', $nim)
            ->where('semester', $semester)
            ->first();

        // Jika tidak ditemukan, ambil data dari semester sebelumnya
        if (!$ipk) {
            $ipk = IPK::where('nim', $nim)
                ->where('semester', '<', $semester)
                ->orderBy('semester', 'desc') // Urutkan dari semester terakhir
                ->first();
        }

        return $ipk;
    }

    /**
     * Simpan data baru ke tabel IPK
     */
    public function store(Request $request)
    {
        $nim = $request->nim;
        $semester = $request->semester;

        // Ambil IPK semester sebelumnya
        $previousIPK = IPK::where('nim', $nim)
            ->where('semester', '<', $semester)
            ->orderBy('semester', 'desc')
            ->first();

        // Simpan data baru
        IPK::create([
            'nim' => $nim,
            'semester' => $semester,
            'ips' => $request->ips,
            'ipk' => $request->ipk ?? $previousIPK->ipk ?? 0.00, // Jika tidak ada, default ke 0.00
        ]);

        return redirect()->back()->with('success', 'Data IPK berhasil disimpan.');
    }
}
