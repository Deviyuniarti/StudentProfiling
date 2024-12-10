<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    use HasFactory;

    protected $table = 'tugas';

    protected $fillable = [
    'judul_tugas',
    'deskripsi_tugas',
    'deadline',
    'nim',
    'nidn',
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'nim', 'nim'); // Relasi BelongsTo dengan mahasiswa
    }

    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'nidn', 'nidn'); // Relasi BelongsTo dengan dosen
    }

    public function penilaian()
    {
        return $this->hasMany(Penilaian::class, 'tugas_id', 'id'); // Relasi one-to-many dengan penilaian
    }
}
