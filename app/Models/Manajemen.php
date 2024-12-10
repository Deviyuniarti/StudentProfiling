<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manajemen extends Model
{
    use HasFactory;

    protected $table = 'manajemen';

    protected $fillable = [
        'rata_rata_ipk',
        'kinerja_fakultas',
        'analisis_jalur_karir',
        'password',
        'user_id',
    ];

    public function rekomendasiKarir()
    {
        return $this->hasMany(RekomendasiKarir::class, 'manajemen_id', 'id'); // Relasi one-to-many dengan rekomendasi karir
    }

    public function user()
    {
        return $this->belongsTo(Admin::class, 'user_id', 'id'); // Relasi belongsTo dengan admin
    }

    /**
     * Relasi One-to-Many dengan History Nontifikasi
     * Manajemen memiliki banyak history nontifikasi
     */
    public function historyNontifikasi()
    {
        return $this->hasMany(HistoryNontifikasi::class, 'manajemen_id', 'id'); // Relasi one-to-many dengan history_nontifikasi
    }
};
