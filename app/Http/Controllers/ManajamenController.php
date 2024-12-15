<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RekomendasiKarir;

class ManajamenController extends Controller
{
    public function index()
    {
        return view('pages.manajemen.index'); 
    }

    public function manage()
    {
        $interaksi = InteraksiRekomendasi::with('rekomendasiKarir')->get();
        return view('admin.interaksi', compact('interaksi'));
    }

    public function showRekomendasiWithLikes()
    {
        // Ambil rekomendasi yang memiliki like
        $rekomendasi = RekomendasiKarir::withCount('interaksiRekomendasi as jumlah_like')
            ->get();

        return view('manajemen.rekomendasi', compact('rekomendasi'));
    }
}

