<?php
// app/Http/Controllers/UserController.php
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // Register a new user
    public function register(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'role_id' => 'required|exists:roles,id',  
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        // Membuat user baru
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role_id,  
        ]);

        return response()->json([
            'message' => 'User registered successfully!',
            'user' => $user,
        ], 201);
    }

    // Login an existing user
    public function login(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        // Mencoba login
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Mendapatkan data user yang terautentikasi
            $user = Auth::user();
            
            // Token untuk API akses (jika menggunakan Laravel Passport atau Sanctum)
            $token = $user->createToken('YourAppName')->accessToken;

            return response()->json([
                'message' => 'Login successful!',
                'user' => $user,
                'token' => $token,
            ]);
        }

        return response()->json(['message' => 'Invalid credentials'], 401);
    }

    // Get User Profile
    public function profile()
    {
        // Mendapatkan data user yang sedang login
        $user = Auth::user();

        if ($user) {
            // Mengembalikan data user, termasuk role
            return response()->json([
                'user' => $user,
                'role' => $user->role,  // Menambahkan informasi role pada response
            ]);
        }

        return response()->json(['message' => 'User not found'], 404);
    }

    // Update User Profile
    public function updateProfile(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . Auth::id(),
            'role_id' => 'required|exists:roles,id',  // Validasi role_id
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        // Mendapatkan user yang sedang login
        $user = Auth::user();

        // Mengupdate informasi user
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => $request->role_id,  // Menyimpan role_id baru
        ]);

        return response()->json([
            'message' => 'User profile updated successfully!',
            'user' => $user,
        ]);
    }

    // Logout User
    public function logout()
    {
        Auth::logout(); // Logout dari sesi
        
        return response()->json(['message' => 'Successfully logged out']);
    }

    public function uploadFoto(Request $request)
{
    $request->validate([
        'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    $path = $request->file('foto')->store('profile_pictures', 'public');

    // Simpan path foto ke database (opsional)
    $user = Auth::user();
    $user->profile_picture = $path;
    $user->save();

    return response()->json(['success' => true, 'path' => asset('storage/' . $path)]);
}
}
