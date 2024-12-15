<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class Mahasiswa extends Authenticatable
{
    // Tentukan nama tabel jika berbeda dengan konvensi default
    protected $table = 'mahasiswa'; 

    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'nim', 
        'nama',
        'tanggal_lahir',
        'program_studi',
        'user_id',
    ];


    /**
     * Validasi aturan untuk model Mahasiswa
     */
    public static function rules()
    {
        return [
            'nim' => 'required|unique:mahasiswa,nim',
            'email' => 'required|email|unique:mahasiswa,email',
            'password' => 'required|min:8',
        ];
    }

    // One-to-One (Mahasiswa - Profil)
    public function profil()
    {
        return $this->hasOne(Profil::class);
    }

     // One-to-Many (Mahasiswa - Tugas)
     public function tugas()
    {
        return $this->hasMany(Tugas::class, 'nim', 'nim'); // Relasi One-to-Many dengan tugas
    }

     public function umpanBalik()
     {
         return $this->hasMany(UmpanBalik::class, 'nim', 'nim'); // Relasi one-to-many dengan umpan balik
     }

    public function ipk()
    {
        return $this->hasMany(Ipk::class, 'nim', 'nim'); // Relasi One-to-Many dengan ipk
    }

    // Relasi Many-to-Many dengan Rekomendasi Karier
    public function rekomendasiKarier()
    {
        return $this->belongsToMany(RekomendasiKarier::class, 'mahasiswa_rekomendasi_karier', 'nim', 'rekomendasi_karier_id');
    }

    public function penilaian()
    {
        return $this->hasMany(Penilaian::class, 'nim', 'nim'); // Relasi one-to-many dengan penilaian
    }

    public function kemajuanAkademik()
    {
        return $this->hasMany(KemajuanAkademik::class, 'nim', 'nim'); // Relasi one-to-many dengan kemajuan_akademik
    }

    public function interaksiRekomendasi()
    {
        return $this->hasMany(InteraksiRekomendasi::class, 'nim', 'nim'); // Relasi one-to-many
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }

    public function mitra()
    {
        return $this->belongsToMany(Mitra::class);
    }
}
