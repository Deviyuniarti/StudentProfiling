<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * Kolom yang dapat diisi secara massal (mass assignable).
     */
    protected $fillable = [
        'name', 
        'email', 
        'password',  
        'google_id',  
        'username',  
        'role',
        'semester'
    ];

    /**
     * Relasi many-to-1 dengan Role (peran pengguna).
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
  
    public function mahasiswa()
    {
        return $this->hasOne(Mahasiswa::class, 'user_id');
    }
}

