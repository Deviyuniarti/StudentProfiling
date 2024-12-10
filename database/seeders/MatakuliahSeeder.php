<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MatakuliahSeeder extends Seeder
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
            ['mata_kuliah' => 'Teknik Informatika'],
            ['mata_kuliah' => 'Animasi 2D&3D'],
            ['mata_kuliah' => 'Basis Data'],
            ['mata_kuliah' => 'Pemrograman Web'],
            ['mata_kuliah' => 'Game'],
            ['mata_kuliah' => 'Sistem Multimedia'],
            ['mata_kuliah' => 'Citra Digital'],
            ['mata_kuliah' => 'jaringan Komputer'],
        ];

        // Masukkan data manual
        foreach ($data as $departemen) {
            Departemen::updateOrCreate(
                ['mata_kuliah' => $departemen['mata_kuliah']],
                $departemen
            );
        }

        // Data Dummy menggunakan Faker
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            Departemen::create([
                'mata_kuliah' => $faker->word, // Menggunakan kata acak sebagai nama departemen
            ]);
        }
    }
}
