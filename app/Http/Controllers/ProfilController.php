<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    // API GET untuk mengambil semua profil
    public function index()
    {
        $profil = Profil::all();
        return response()->json($profil, 200);
    }

    // API GET untuk mengambil profil berdasarkan NIM
    public function show($nim)
    {
        $profil = Profil::where('nim', $nim)->first();

        if (!$profil) {
            return response()->json(['message' => 'Profil not found'], 404);
        }

        return response()->json($profil, 200);
    }

    // API POST untuk menambahkan profil
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|integer|exists:mahasiswa,nim|unique:profil,nim',
            'riwayat_pendidikan' => 'required|string',
            'keterampilan' => 'required|string',
            'kegiatan_ektrakurikuler' => 'required|string',
            'dokumen' => 'required|file',
        ]);

        $filePath = $request->file('dokumen')->store('dokumen_profil', 'public');

        $profil = Profil::create([
            'nim' => $request->nim,
            'riwayat_pendidikan' => $request->riwayat_pendidikan,
            'keterampilan' => $request->keterampilan,
            'kegiatan_ektrakurikuler' => $request->kegiatan_ektrakurikuler,
            'dokumen' => $filePath,
        ]);

        return response()->json(['message' => 'Profil created successfully', 'data' => $profil], 201);
    }

    // API PUT untuk update profil
    public function update(Request $request, $nim)
    {
        $profil = Profil::where('nim', $nim)->first();

        if (!$profil) {
            return response()->json(['message' => 'Profil not found'], 404);
        }

        $profil->update($request->all());

        return response()->json(['message' => 'Profil updated successfully', 'data' => $profil], 200);
    }

    // API DELETE untuk menghapus profil
    public function destroy($nim)
    {
        $profil = Profil::where('nim', $nim)->first();

        if (!$profil) {
            return response()->json(['message' => 'Profil not found'], 404);
        }

        $profil->delete();

        return response()->json(['message' => 'Profil deleted successfully'], 200);
    }
}
