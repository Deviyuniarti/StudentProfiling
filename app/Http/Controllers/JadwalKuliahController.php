<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JadwalKuliahController extends Controller
{
    public function index()
    {
        return view('pages.mahasiswa.jadwal_kuliah'); 
    }
}
