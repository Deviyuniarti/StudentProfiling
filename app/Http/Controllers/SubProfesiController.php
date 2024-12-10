<?php

namespace App\Http\Controllers;

use App\Models\SubProfesi;
use App\Models\RekomendasiKarir;
use Illuminate\Http\Request;

class SubProfesiController extends Controller
{
    public function index()
    {
        $subProfesi = SubProfesi::all();
        return view('admin.sub_profesi.index', compact('subProfesi'));
    }

    public function create()
    {
        $rekomendasiKarir = RekomendasiKarir::all();  // Ambil data rekomendasi karir
        return view('admin.sub_profesi.create', compact('rekomendasiKarir'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_sub_profesi' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'keterampilan_diperlukan' => 'required|string',
            'tools' => 'required|string',
            'rencana_pengembangan' => 'required|string',
            'rekomendasi_karir_id' => 'required|exists:rekomendasi_karir,id', // Validasi terhadap rekomendasi karir yang ada
        ]);

        SubProfesi::create($request->all());

        return redirect()->route('subprofesi.index')->with('success', 'Sub-profesi berhasil ditambahkan');
    }

    public function edit(SubProfesi $subProfesi)
    {
        $rekomendasiKarir = RekomendasiKarir::all();  // Ambil data rekomendasi karir
        return view('admin.sub_profesi.edit', compact('subProfesi', 'rekomendasiKarir'));
    }

    public function update(Request $request, SubProfesi $subProfesi)
    {
        $request->validate([
            'nama_sub_profesi' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'keterampilan_diperlukan' => 'required|string',
            'tools' => 'required|string',
            'rencana_pengembangan' => 'required|string',
            'rekomendasi_karir_id' => 'required|exists:rekomendasi_karir,id', // Validasi terhadap rekomendasi karir yang ada
        ]);

        $subProfesi->update($request->all());

        return redirect()->route('subprofesi.index')->with('success', 'Sub-profesi berhasil diupdate');
    }

    public function destroy(SubProfesi $subProfesi)
    {
        $subProfesi->delete();
        return redirect()->route('subprofesi.index')->with('success', 'Sub-profesi berhasil dihapus');
    }
}
