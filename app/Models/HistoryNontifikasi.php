<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryNontifikasi extends Model
{
    use HasFactory;

    protected $table = "history_nontifikasi";

    protected $fillable = [
        'user_id',
        'manajemen_id',
        'tanggal_kirim',
        'status_kirim',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function manajemen()
    {
        return $this->belongsTo(Manajemen::class, 'manajemen_id', 'id'); // Relasi belongsTo dengan manajemen
    }

    public function nontifikasi()
    {
        return $this->hasOne(Nontifikasi::class, 'history_nontifikasi_id', 'id'); // Relasi one-to-one dengan nontifikasi
    }
}
