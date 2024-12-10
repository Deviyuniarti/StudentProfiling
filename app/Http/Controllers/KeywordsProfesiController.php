<?php

namespace App\Http\Controllers;

use App\Models\KeywordsProfesi;
use Illuminate\Http\Request;

class KeywordsProfesiController extends Controller
{
    public function index()
    {
        $keywords = KeywordsProfesi::all();
        return view('admin.keywords_profesi.index', compact('keywords'));
    }

    public function create()
    {
        return view('admin.keywords_profesi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_keyword' => 'required|string|max:255',
        ]);

        KeywordsProfesi::create($request->all());

        return redirect()->route('keywords.index')->with('success', 'Keyword profesi berhasil ditambahkan');
    }

    public function edit(KeywordsProfesi $keywordsProfesi)
    {
        return view('admin.keywords_profesi.edit', compact('keywordsProfesi'));
    }

    public function update(Request $request, KeywordsProfesi $keywordsProfesi)
    {
        $request->validate([
            'nama_keyword' => 'required|string|max:255',
        ]);

        $keywordsProfesi->update($request->all());

        return redirect()->route('keywords.index')->with('success', 'Keyword profesi berhasil diupdate');
    }

    public function destroy(KeywordsProfesi $keywordsProfesi)
    {
        $keywordsProfesi->delete();
        return redirect()->route('keywords.index')->with('success', 'Keyword profesi berhasil dihapus');
    }
}
