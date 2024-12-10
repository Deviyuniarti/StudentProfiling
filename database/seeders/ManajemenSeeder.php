<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Manajemen;
use App\Models\User;
use Faker\Factory as Faker;

class ManajemenSeeder extends Seeder
{
    /**
     * Jalankan seeder untuk tabel manajemen.
     */
    public function run()
    {
        // Data Manual
        $data = [
            [
                'rata_rata_ipk' => 3.75,
                'kinerja_fakultas' => 'Sangat Baik',
                'analisis_jalur_karir' => 'Analisis prospek karier berbasis kompetensi',
                'password' => Hash::make('password123'),
                'user_id' => 1, // Harus sesuai dengan data user yang ada
            ],
            [
                'rata_rata_ipk' => 3.90,
                'kinerja_fakultas' => 'Baik',
                'analisis_jalur_karir' => 'Peluang karier di bidang teknologi',
                'password' => Hash::make('password123'),
                'user_id' => 2,
            ],
        ];

        // Masukkan data manual
        foreach ($data as $manajemen) {
            Manajemen::updateOrCreate(
                ['user_id' => $manajemen['user_id']], // Gunakan user_id sebagai kunci unik
                $manajemen
            );
        }

        // Data Dummy menggunakan Faker
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            Manajemen::create([
                'rata_rata_ipk' => $faker->randomFloat(2, 2.5, 4.0), // IPK antara 2.5 - 4.0
                'kinerja_fakultas' => $faker->sentence(3), // Deskripsi singkat
                'analisis_jalur_karir' => $faker->sentence(6), // Analisis deskriptif
                'password' => Hash::make('password123'), // Password dummy
                'user_id' => $faker->unique()->numberBetween(1, 2), 
            ]);
        }
    }
}
