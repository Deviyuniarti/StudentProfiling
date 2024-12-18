<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keterampilan extends Model
{
    use HasFactory;

    protected $fillable = ['judul_keterampilan', 'deskripsi', 'keterampilan', 'media'];

    
    public function tags()
{
    return $this->belongsToMany(Tag::class, 'keterampilan_tag', 'keterampilan_id', 'tag_id');
}

}
