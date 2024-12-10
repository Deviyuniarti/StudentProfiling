<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalenderAkademikController extends Controller
{
    public function index()
    {
        return view('pages.mahasiswa.kalender_akademik'); 
    }
}
