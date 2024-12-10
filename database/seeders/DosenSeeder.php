<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Dosen;
use App\Models\User;
use Faker\Factory as Faker;

class DosenSeeder extends Seeder
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
                'nidn' => '011022201',
                'name' => 'El S.Kom, M.Kom',
                'email' => 'el@dosen.com',
                'password' => Hash::make('password123'),
                'departemen_id' => 1, // Asumsi Departemen pertama
            ],
            [
                'nidn' => '011022202',
                'name' => 'Cipung S.Kom',
                'email' => 'cipung@dosen.com',
                'password' => Hash::make('password123'),
                'departemen_id' => 2, 
            ],
            [
                'nidn' => '011022203',
                'name' => 'Gempi S.Kom',
                'email' => 'gempi@dosen.com',
                'password' => Hash::make('gempi82028'),
                'departemen_id' => 1,
            ],
        ];

        // Masukkan data manual
        foreach ($data as $dosen) {
            // Buat user terlebih dahulu
            $user = User::create([
                'name' => $dosen['name'],
                'email' => $dosen['email'],
                'password' => $dosen['password'],
                'role' => 'dosen', // Set role sebagai dosen
            ]);

            // Buat data dosen
            Dosen::create([
                'nidn' => $dosen['nidn'],
                'name' => $dosen['name'],
                'email' => $dosen['email'],
                'password' => $dosen['password'], // Simpan password yang sama
                'departemen_id' => $dosen['departemen_id'],
                'user_id' => $user->id, // Hubungkan dengan user ID
            ]);
        }

        // Data Dummy menggunakan Faker
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            $user = User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('password123'), // Password default
                'role' => 'dosen',
            ]);

            Dosen::create([
                'nidn' => $faker->unique()->numerify('########'), // NIDN 8 karakter
                'name' => $user->name,
                'email' => $user->email,
                'password' => $user->password, // Gunakan password user
                'departemen_id' => $faker->numberBetween(1, 3), // Asumsi ada 3 departemen
                'user_id' => $user->id,
            ]);
        }
    }
}
