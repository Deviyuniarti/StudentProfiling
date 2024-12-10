<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Ambil user yang sedang login
            $user = Auth::user();

            // Update semester setelah login berhasil
            $this->updateSemester($user);

            // Cek peran pengguna
            switch ($user->role) {
                case 'admin':
                    return redirect()->route('admin.dashboard')->with('success', 'Selamat datang, Admin!');
                case 'mahasiswa':
                    return redirect()->route('mahasiswa.dashboard')->with('success', 'Selamat datang, Mahasiswa!');
                case 'dosen':
                    return redirect()->route('dosen.dashboard')->with('success', 'Selamat datang, Dosen!');
                case 'manajemen':
                    return redirect()->route('manajemen.dashboard')->with('success', 'Selamat datang, Manajemen!');
                default:
                    Auth::logout();
                    return redirect()->route('login')->with('error', 'Peran pengguna tidak dikenal.');
            }
        }

        // Jika login gagal
        return redirect()->back()->with('error', 'Email atau password salah.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Anda telah logout.');
    }

    private function updateSemester($user)
    {
        // Logika untuk menentukan semester, misalnya berdasarkan tahun ajaran
        $currentYear = date('Y');
        $user->semester = $this->calculateSemester(); // Panggil fungsi untuk menghitung semester
        $user->save(); // Simpan perubahan ke database
    }

    private function calculateSemester()
    {
        $entryYear = 2022; // Tahun masuk mahasiswa
        $entryMonth = 9; // Bulan masuk mahasiswa (September)

        $currentYear = date('Y');
        $currentMonth = date('n'); // Bulan saat ini

        $semester = 1; // Semester default

        if ($currentYear > $entryYear) {
            // Jika tahun saat ini lebih besar dari tahun masuk, maka semester akan bertambah
            $semester += ($currentYear - $entryYear) * 2;
        }

        if ($currentMonth >= $entryMonth && $currentMonth <= 12) {
            // Jika bulan saat ini adalah semester ganjil (September - Desember)
            $semester += 0;
        } elseif ($currentMonth >= 1 && $currentMonth <= 6) {
            // Jika bulan saat ini adalah semester genap (Januari - Juni)
            $semester += 2;
        }

        return $semester;
    }
}
