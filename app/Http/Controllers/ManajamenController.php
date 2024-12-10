<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManajamenController extends Controller
{
    public function index()
    {
        return view('pages.manajemen.index'); 
    }

    public function showLoginForm()
    {
        return view('auth.mahasiswa.login');
    }

    public function manage()
    {
        $interaksi = InteraksiRekomendasi::with('rekomendasiKarir')->get();
        return view('admin.interaksi', compact('interaksi'));
    }
}
