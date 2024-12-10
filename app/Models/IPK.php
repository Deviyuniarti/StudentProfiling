<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IPK extends Model
{
    use HasFactory;

    protected  $table = 'ipk';
    
    protected $fillable = [
        'nim',
        'semester',
        'ips',
        'ipk',
    ];

    // Relasi Belongs-to dengan Mahasiswa
    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'nim', 'nim'); // Relasi BelongsTo dengan mahasiswa
    }
};
