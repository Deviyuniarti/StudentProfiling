<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;

    protected $table = 'profil';

    protected $fillable =[
        'nim',
        'riwayat_pendidikan',
        'keterampilan',
        'kegiatan_ektrakurikuler',
        'dokumen'
    ];

    // Relasi Belongs-to dengan Mahasiswa
    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }
};
