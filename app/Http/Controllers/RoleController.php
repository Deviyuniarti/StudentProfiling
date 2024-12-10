<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    // Menampilkan halaman role index
    public function index()
    {
        return view('role.index'); 
    }
}
