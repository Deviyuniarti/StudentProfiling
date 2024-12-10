<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InteraksiRekomendasi extends Model
{
    use HasFactory;

    protected $table = 'interaksi_rekomendasi';

    protected $fillable = [
        'nim',
        'rekomendasi_id',
        'suka',
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'nim', 'nim'); // Relasi belongsTo dengan mahasiswa
    }
        public function rekomendasiKarir()
    {
        return $this->belongsTo(RekomendasiKarir::class, 'rekomendasi_id');
    }
}
