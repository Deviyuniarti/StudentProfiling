<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name']; // Kolom yang bisa diisi

    public function keterampilan()
    {
        return $this->belongsToMany(Keterampilan::class, 'keterampilan_tag', 'tag_id', 'keterampilan_id');
    }

}
