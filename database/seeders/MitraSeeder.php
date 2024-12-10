<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mitra; // Pastikan Anda telah membuat model Mitra

class MitraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data Mitra yang akan dimasukkan ke dalam tabel
        $mitra = 
        [
            'nama' =>  'PT Gojek Indonesia', 
            'tahun_bergabung' => 2017
        ];
        [
            'nama' =>  'PT Ogilvy Indonesia', 
            'tahun_bergabung' => 2018
        ];
        [
            'nama' =>  'PT The Little Giantz', 
            'tahun_bergabung' => 2018
        ];
        [
            'nama' =>  'PT The Visinema Pictures', 
            'tahun_bergabung' => 2019
        ];
        [
            'nama' =>  'PT Shining 3D', 
            'tahun_bergabung' => 2019
        ];
        [
            'nama' =>  'PT Kompas Gramedia', 
            'tahun_bergabung' => 2021
        ];

        // Menyimpan data ke dalam tabel 'mitra'
        foreach ($mitra as $mitraName) {
            Mitra::create([
                'nama' => $mitraName, 
            ]);
        }
    }
}
