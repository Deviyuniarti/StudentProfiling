<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    use HasFactory;

    protected $table = 'penilaian';

    protected $fillable = [
        'tugas_id',
        'nim',
        'nidn',
        'nilai',
        'catatan',
        'tanggal_penilaian'
    ];

   
    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'nidn', 'nidn'); // Relasi belongsTo dengan dosen
    }

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'nim', 'nim'); // Relasi belongsTo dengan mahasiswa
    }

    public function tugas()
    {
        return $this->belongsTo(Tugas::class, 'tugas_id', 'id'); // Relasi belongsTo dengan tugas
    }
    
};
