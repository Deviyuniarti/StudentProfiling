<?php
namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('q'); // Ambil parameter pencarian
        $tags = Tag::where('name', 'LIKE', "%$search%")->pluck('name');
        return response()->json($tags);
    }

   
}
