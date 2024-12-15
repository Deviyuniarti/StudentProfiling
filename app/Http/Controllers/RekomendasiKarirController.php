<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InteraksiRekomendasi;
use App\Models\RekomendasiKarir;

class RekomendasiKarirController extends Controller
{
     // Fungsi untuk menampilkan halaman rekomendasi karir
     public function index()
     {
         // Ambil data rekomendasi karir
         $rekomendasi_karir = RekomendasiKarir::all(); // Mengambil semua data, sesuaikan dengan kebutuhan (bisa first(), find(), dll.)
 
         // Kirim data ke view rekomendasi_karir.blade.php
         return view('pages.mahasiswa.rekomendasi_karir', compact('rekomendasi_karir'));
     }

}
