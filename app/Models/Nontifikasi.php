<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nontifikasi extends Model
{
    use HasFactory;

    protected $table = 'nontifikasi';

    protected $fillable = [
        'penerima_id',
        'jenis_nontifikasi',
        'isi_nontifikasi',
        'tanggal_waktu',
        'status_baca',
        'nim',
        'nidn',
        'history_nontifikasi_id',
    ];

    public function historyNontifikasi()
    {
        return $this->belongsTo(HistoryNontifikasi::class, 'history_nontifikasi_id', 'id'); // Relasi one-to-one dengan history_nontifikasi
    }

    // Relasi Polimorfik ke penerima
    public function penerima()
    {
        return $this->morphTo();
    }
};
