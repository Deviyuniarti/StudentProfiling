<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubProfesi extends Model
{
    use HasFactory;

    protected $fillable = [
        'rekomendasi_karir_id',
        'nama_sub_profesi',
        'deskripsi',
    ];

    public function rekomendasiKarir()
    {
        return $this->belongsTo(RekomendasiKarir::class);
    }
}
