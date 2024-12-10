<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekomendasiKarir extends Model
{
    use HasFactory;

    protected $table = 'rekomendasi_karir';

    protected $fillable = [
       'jalur_karir',
       'penyesuaian_manual',
       'peluang_magang',
       'manajemen_id',
       'nidn',
       'is_selected_by_dosen',
    ];

    // Relasi Many-to-Many dengan Mahasiswa
    public function mahasiswa()
    {
        return $this->belongsToMany(Mahasiswa::class, 'mahasiswa_rekomendasi_karier', 'rekomendasi_karier_id', 'nim');
    }

    public function manajemen()
    {
        return $this->belongsTo(Manajemen::class, 'manajemen_id', 'id'); // Relasi belongsTo dengan manajemen
    }

    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'nidn', 'nidn'); // Relasi belongsTo dengan dosen
    }

    public function interaksi()
    {
        return $this->hasMany(InteraksiRekomendasi::class, 'rekomendasi_id', 'id'); // Relasi one-to-many dengan interaksi
    }

    public function subProfesi()
    {
        return $this->hasMany(SubProfesi::class);
    }
};
