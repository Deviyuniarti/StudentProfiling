<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keterampilan;

class KeterampilanController extends Controller
{

    public function index()
{
    $keterampilan = Keterampilan::with('tags')->get();
    return view('template_mahasiswa.aktivitas_mahasiswa', compact('keterampilan'));
}

    public function store(Request $request)
    {
        $request->validate([
            'judul_keterampilan' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'keterampilan' => 'required|string',
            'tags' => 'required|array', // Pastikan tags adalah array
            'tags.*' => 'exists:tags,id', // Pastikan setiap tag valid
        ]);

        // Simpan keterampilan
        $keterampilan = Keterampilan::create([
            'judul_keterampilan' => $request->judul_keterampilan,
            'deskripsi' => $request->deskripsi,
            'keterampilan' => $request->keterampilan,
        ]);

        // Simpan relasi many-to-many dengan tags
        $keterampilan->tags()->sync($request->tags);

        return redirect()->route('keterampilan.index')->with('success', 'Keterampilan berhasil ditambahkan!');

    }
}