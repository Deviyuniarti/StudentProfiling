<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IPK;
class IpkController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'ips' => 'required|numeric',
            'ipk' => 'required|numeric',
        ]);

        // Simpan nilai ke database
        $ipk = IPK::where('user_id', Auth::id())->first();
        if (!$ipk) {
            $ipk = new IPK();
            $ipk->user_id = Auth::id();
        }
        $ipk->ips = $request->ips;
        $ipk->ipk = $request->ipk;
        $ipk->save();

        return redirect()->back()->with('success', 'Nilai berhasil disimpan.');
    }

}
