<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jurusan; 

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data Manual untuk Jurusan
        $jurusan = [
            'Teknologi Informatika Multimedia',
            'Teknik Informatika',
            'Teknik Sipil',
            'Teknik Mesin',
            'Teknik Elektro',
            'Akuntansi',
            'Administrasi Bisnis',
        ];

        // Insert data ke dalam tabel 'jurusan'
        foreach ($jurusan as $jurusanItem) {
            Jurusan::create([
                'nama' => $jurusanItem,
            ]);
        }
    }
}
