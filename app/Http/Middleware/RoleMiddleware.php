<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string  $role
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    // public function handle(Request $request, Closure $next, $role)
    // {
    //     // Cek jika user sudah login
    //     if (!Auth::check()) {
    //         return redirect('/login');
    //     }

    //     // Cek role sesuai guard yang digunakan
    //     $user = Auth::user();
    //     if ($role === 'mahasiswa' && !auth()->guard('mahasiswa')->check()) {
    //         return redirect('/login/mahasiswa');
    //     }

    //     if ($role === 'dosen' && !auth()->guard('dosen')->check()) {
    //         return redirect('/login/dosen');
    //     }

    //     if ($role === 'manajemen' && !auth()->guard('manajemen')->check()) {
    //         return redirect('/login/manajemen');
    //     }

    //     return $next($request);
    // }

    // public function handle(Request $request, Closure $next, $role)
    // {
    //     if (auth()->user() && auth()->user()->role == $role) {
    //         return $next($request);
    //     }

    //     return redirect('/');  // Redirect jika role tidak sesuai
    // }
}
