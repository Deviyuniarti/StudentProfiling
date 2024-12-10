<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Departemen; 
use Faker\Factory as Faker;

class DepartemenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data Manual
        $data = [
            ['nama_departemen' => 'Teknik Informatika'],
            ['nama_departemen' => 'Animasi 2D&3D'],
            ['nama_departemen' => 'Basis Data'],
            ['nama_departemen' => 'Pemrograman Web'],
            ['nama_departemen' => 'Game'],
            ['nama_departemen' => 'Sistem Multimedia'],
            ['nama_departemen' => 'Citra Digital'],
            ['nama_departemen' => 'jaringan Komputer'],
        ];

        // Masukkan data manual
        foreach ($data as $departemen) {
            Departemen::updateOrCreate(
                ['nama_departemen' => $departemen['nama_departemen']],
                $departemen
            );
        }

        // Data Dummy menggunakan Faker
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            Departemen::create([
                'nama_departemen' => $faker->word, // Menggunakan kata acak sebagai nama departemen
            ]);
        }
    }
}
