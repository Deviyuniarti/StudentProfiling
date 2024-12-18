<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Ipk;
use Illuminate\Http\Request;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;

class MahasiswaController extends Controller
{
    /**
     * Menampilkan halaman dashboard mahasiswa setelah login.
     */
    public function dashboard()
    {
        // Ambil user yang sedang login
        $user = Auth::user();

        // Ambil data mahasiswa berdasarkan user_id
        $mahasiswa = $user->mahasiswa;

        // Periksa apakah data mahasiswa ditemukan
        if ($mahasiswa) {
            // Ambil IPK terbaru berdasarkan nim mahasiswa
            $ipk = Ipk::where('nim', $mahasiswa->nim)
                ->orderBy('semester', 'desc')
                ->first();

            // Kembalikan view dengan data
            return view('pages.mahasiswa.dashboard', [
                'nama' => $user->name, // Nama dari tabel users
                'nim' => $mahasiswa->nim, // NIM dari tabel mahasiswa
                'ipk' => $ipk, // Data IPS dan IPK dari tabel IPK
            ]);
        } else {
            return view('pages.mahasiswa.dashboard', ['error' => 'Data Mahasiswa tidak ditemukan']);
        }
    }

    /**
     * Ambil data IPK berdasarkan NIM dan semester.
     */
    public function getIPK($semester)
    {
        // Ambil user yang sedang login
        $user = Auth::user();

        // Ambil data mahasiswa
        $mahasiswa = $user->mahasiswa;

        if (!$mahasiswa) {
            return response()->json(['error' => 'Data mahasiswa tidak ditemukan'], 404);
        }

        // Ambil data IPK berdasarkan NIM dan semester
        $ipk = Ipk::where('nim', $mahasiswa->nim)
            ->where('semester', $semester)
            ->first();

        return response()->json($ipk);
    }

    /**
     * Simpan data baru ke tabel IPK.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'semester' => 'required|integer',
            'ips' => 'required|numeric|between:0,4.00',
        ]);

        // Ambil user yang sedang login
        $user = Auth::user();
        $mahasiswa = $user->mahasiswa;

        if (!$mahasiswa) {
            return redirect()->back()->with('error', 'Data mahasiswa tidak ditemukan.');
        }

        // Cek IPK semester sebelumnya
        $previousIPK = Ipk::where('nim', $mahasiswa->nim)
            ->where('semester', '<', $request->semester)
            ->orderBy('semester', 'desc')
            ->first();

        // Simpan data IPK
        Ipk::create([
            'nim' => $mahasiswa->nim,
            'semester' => $request->semester,
            'ips' => $request->ips,
            'ipk' => $request->ipk ?? $previousIPK->ipk ?? 0.00, // Gunakan nilai IPK sebelumnya jika tidak diinput
        ]);

        return redirect()->back()->with('success', 'Data IPK berhasil disimpan.');
    }

    /**
     * Menampilkan data mahasiswa yang sedang login.
     */
    public function dataMahasiswa()
    {

        return view('pages.mahasiswa.data_mahasiswa');
    }

    /**
     * Menampilkan aktivitas mahasiswa.
     */
    public function aktivitasMahasiswa()
    {

        return view('pages.mahasiswa.aktivitas_mahasiswa');
   
    }

    public function aktivitas()
    {
        $tags = Tag::all();
        return view('mahasiswa.aktivitas_mahasiswa', compact('tags'));
    }
}

