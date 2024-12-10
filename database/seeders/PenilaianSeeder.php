<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Penilaian;
use Faker\Factory as Faker;
use Carbon\Carbon;

class PenilaianSeeder extends Seeder
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
            [
                'tugas_id' => 1, // ID tugas yang relevan
                'nim' => '202139401', // NIM mahasiswa yang dinilai
                'nidn' => '011022201', // NIDN dosen yang memberikan penilaian
                'nilai' => 85,
                'catatan' => 'Tugas selesai tepat waktu, kualitas baik.',
                'tanggal_penilaian' => Carbon::now(),
            ],
            [
                'tugas_id' => 2,
                'nim' => '202139402',
                'nidn' => '011022201',
                'nilai' => 90,
                'catatan' => 'Tugas sangat baik, butuh sedikit perbaikan di bagian analisis.',
                'tanggal_penilaian' => Carbon::now(),
            ],
            [
                'tugas_id' => 3,
                'nim' => '202139403',
                'nidn' => '011022203',
                'nilai' => 75,
                'catatan' => 'Tugas terlambat, perlu peningkatan di aspek pemrograman.',
                'tanggal_penilaian' => Carbon::now(),
            ],
        ];

        // Masukkan data manual
        foreach ($data as $penilaian) {
            Penilaian::updateOrCreate(
                [
                    'tugas_id' => $penilaian['tugas_id'],
                    'nim' => $penilaian['nim'],
                ],
                $penilaian
            );
        }

        // Data Dummy menggunakan Faker
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            Penilaian::create([
                'tugas_id' => $faker->numberBetween(1, 10), // ID tugas antara 1-10
                'nim' => $faker->unique()->numerify('########'), // NIM mahasiswa 8 karakter
                'nidn' => $faker->numerify('########'), // NIDN dosen 8 karakter
                'nilai' => $faker->numberBetween(60, 100), // Nilai antara 60-100
                'catatan' => $faker->sentence(6), // Catatan deskriptif
                'tanggal_penilaian' => $faker->dateTimeBetween('-1 month', 'now'), // Tanggal penilaian
            ]);
        }
    }
}
