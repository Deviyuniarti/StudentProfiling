<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class GoogleController extends Controller
{
    public function redirectToGoogle(Request $request)
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $findUser = User::where('google_id', $user->getId())->first();

            if ($findUser) {
                // Login jika pengguna sudah ada
                Auth::login($findUser);
            } else {
                // Tentukan role berdasarkan email
                $role = 'mahasiswa'; // Default role
                $email = $user->getEmail();

                // Contoh logika berdasarkan domain email
                if (str_ends_with($email, '@gmail.com')) {
                    $role = 'admin';
                } elseif (str_ends_with($email, '@gmail.com')) {
                    $role = 'dosen';
                } elseif (str_ends_with($email, '@gmail.com')) {
                    $role = 'manajemen';
                }

                // Buat pengguna baru
                $newUser = User::create([
                    'name' => $user->getName(),
                    'username' => $user->getEmail(),
                    'email' => $email,
                    'google_id' => $user->getId(),
                    'role' => $role,
                    'password' => bcrypt('password') // Password default
                ]);

                Auth::login($newUser);
            }

            // Redirect ke halaman sesuai role
            return $this->redirectToRole(Auth::user()->role);

        } catch (\Throwable $th) {
            return redirect('/login')->with('error', 'Terjadi kesalahan saat login.');
        }
    }

    private function redirectToRole($role)
    {
        switch ($role) {
            case 'admin':
                return redirect()->route('admin.index');
            case 'dosen':
                return redirect()->route('dosen.index');
            case 'manajemen':
                return redirect()->route('manajemen.index');
            case 'mahasiswa':
            default:
                return redirect()->route('mahasiswa.index');
        }
    }

}
