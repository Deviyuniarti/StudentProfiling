<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ipk; 
use Faker\Factory as Faker;

class IpkSeeder extends Seeder
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
                'nim' => '12345678',  
                'semester' => 5,  // Integer
                'ips' => 3.8,  // Float
                'ipk' => 4.0,  // Float
                'manajemen_id' => 1, // Asumsi ID manajemen pertama
            ],
            [
                'nim' => '87654321', 
                'semester' => 5,  
                'ips' => 3.74,  
                'ipk' => 3.9,  
                'manajemen_id' => 2,
            ],
        ];

        // Masukkan data manual ke tabel IPK
        foreach ($data as $ipk) {
            Ipk::updateOrCreate(
                ['nim' => $ipk['nim']], 
                $ipk
            );
        }

        // Data Dummy menggunakan Faker
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            Ipk::create([
                'nim' => $faker->unique()->numerify('########'), // NIM unik 8 karakter
                'semester' => $faker->numberBetween(1, 8), // Semester antara 1 hingga 8
                'ips' => $faker->randomFloat(2, 2.5, 4.0), // IPS antara 2.5 hingga 4.0
                'ipk' => $faker->randomFloat(2, 2.5, 4.0), // IPK antara 2.5 hingga 4.0
                'manajemen_id' => $faker->numberBetween(1, 3), // Asumsi ada 3 data manajemen
            ]);
        }
    }
}
