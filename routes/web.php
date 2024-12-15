<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KalenderAkademikController;
use App\Http\Controllers\JadwalKuliahController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\HasilStudiController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ManajemenController;
use App\Http\Controllers\RekomendasiKarirController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ForgotPasswordController;


// Halaman Utama (Index)
Route::get('/', function () {
    return view('auth.login');
});


Route::middleware(['auth'])->group(function () {
    Route::middleware(['role:mahasiswa'])->group(function () {
        Route::get('/mahasiswa', [MahasiswaController::class, 'dashboard'])->name('mahasiswa.dashboard');
        Route::get('/kalender_akademik', [KalenderAkademikController::class, 'index'])->name('kalender_akademik');
        Route::get('/jadwal_kuliah', [JadwalKuliahController::class, 'index'])->name('jadwal_kuliah');
        Route::get('/tugas_kuliah', [TugasController::class, 'index'])->name('tugas_kuliah');
        Route::get('/hasil_studi', [HasilStudiController::class, 'index'])->name('hasil_studi');
        Route::get('/rekomendasi_karir', [RekomendasiKarirController::class, 'index'])->name('rekomendasi_karir');
        Route::post('/rekomendasi_karir/like', [RekomendasiKarirController::class, 'like'])->name('rekomendasi_karir.like');
        Route::get('/data_mahasiswa', [MahasiswaController::class, 'dataMahasiswa'])->name('mahasiswa.data_mahasiswa');
        Route::post('/upload-foto', [UserController::class, 'uploadFoto'])->name('upload.foto');
    });

    // Route::middleware(['role:admin'])->group(function () {
    //     Route::get('/admin/interaksi', [RekomendasiKarirController::class, 'manage'])->name('admin.interaksi');
    // });
});


Route::get('/dosen', [DosenController::class, 'dashboard'])->name('dosen.dashboard');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.proses');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// Rute Google Authentication
Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback');



