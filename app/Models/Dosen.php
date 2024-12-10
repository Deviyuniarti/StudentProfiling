<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Dosen extends Authenticatable
{
    use Notifiable;

    /**
     * Nama tabel yang terkait dengan model.
     *
     * @var string
     */
    protected $table = 'dosen';

    /**
     * Kolom-kolom yang dapat diisi secara massal.
     *
     * @var array
     */
    protected $fillable = [
        'nidn',
        'name',
        'email',
        'password',
        'departemen_id', // Foreign key ke tabel Departemen
        'user_id',
    ];

    /**
     * Menyembunyikan kolom tertentu dari array/json.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Relasi dengan tabel Departemen (Many-to-One).
     */
    public function departemen()
    {
        return $this->belongsTo(Departemen::class, 'departemen_id', 'id'); // Foreign key 'departemen_id' mengarah ke 'id' di departemen
    }

    /**
     * Relasi dengan tabel Tugas (One-to-Many).
     */
    public function tugas()
    {
        return $this->hasMany(Tugas::class, 'nidn', 'nidn'); // Relasi One-to-Many dengan tugas
    }

    /**
     * Relasi dengan tabel Umpan Balik (One-to-Many).
     */
    // Relasi One-to-Many dengan UmpanBalik
    public function umpanBalik()
    {
        return $this->hasMany(UmpanBalik::class, 'nidn', 'nidn');
    }

    /**
     * Relasi dengan tabel Penilaian (One-to-Many).
     */
    public function penilaian()
    {
        return $this->hasMany(Penilaian::class, 'nidn', 'nidn'); // Relasi one-to-many dengan penilaian
    }

    public function rekomendasiKarir()
    {
        return $this->hasMany(RekomendasiKarir::class, 'nidn', 'nidn'); // Relasi one-to-many
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
