<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DosenController extends Controller
{

    public function index()
    {   
        return view('pages.mahasiswa.index');
    }


    public function showRekomendasiDosen()
    {
        $rekomendasiDosen = RekomendasiKarir::where('created_by_type', 'dosen')->with('subProfesi')->get();

        return view('admin.rekomendasi_dosen', compact('rekomendasiDosen'));
    }
}
