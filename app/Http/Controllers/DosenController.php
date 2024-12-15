<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DosenController extends Controller
{

    public function dashboard()
    {   
        return view('pages.dosen.dashboard');
    }


    public function showRekomendasiDosen()
    {
        $rekomendasiDosen = RekomendasiKarir::where('created_by_type', 'dosen')->with('subProfesi')->get();

        return view('admin.rekomendasi_dosen', compact('rekomendasiDosen'));
    }
}
