<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HasilStudiController extends Controller
{
    public function index()
    {
        return view('pages.mahasiswa.hasil_studi'); 
    }
}
