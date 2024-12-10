<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HistoryNontifikasi;
use Faker\Factory as Faker;

class HistoryNontifikasiSeeder extends Seeder
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
                'admin_id' => 1, 
                'manajemen_id' => 1,
                'tanggal_kirim' => '2024-12-01',
                'status_kirim' => true,
            ],
            [
                'admin_id' => 2,
                'manajemen_id' => 2,
                'tanggal_kirim' => '2024-12-10',
                'status_kirim' => false,
            ],
        ];

        // Masukkan data manual
        foreach ($data as $history) {
            HistoryNontifikasi::updateOrCreate([
                'admin_id' => $history['admin_id'],
                'manajemen_id' => $history['manajemen_id'],
            ], $history);
        }

        // Data Dummy menggunakan Faker
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            HistoryNontifikasi::create([
                'admin_id' => $faker->numberBetween(1, 10), // Asumsi admin_id ada antara 1-10
                'manajemen_id' => $faker->numberBetween(1, 10), // Asumsi manajemen_id ada antara 1-10
                'tanggal_kirim' => $faker->dateTimeBetween('-1 month', 'now')->format('Y-m-d'),
                'status_kirim' => $faker->boolean,
            ]);
        }
    }
}
