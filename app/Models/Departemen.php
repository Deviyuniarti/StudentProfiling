<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departemen extends Model
{
    use HasFactory;

    protected $table = "departemen";

    protected $fillable = [
        'nama_departemen',
    ];

     // Relasi One-to-Many dengan Dosen
    public function dosen()
    {
        return $this->hasMany(Dosen::class, 'departemen_id', 'id'); // Foreign key 'departemen_id' di dosen mengarah ke 'id' di departemen
    }
};
