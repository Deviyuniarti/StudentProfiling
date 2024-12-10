<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User; 
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Seeder Manual untuk Pengguna

        // Admin
        User::create([
            'name' => 'Admin Utama 1',
            'email' => 'admin1@gmail.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',  // Role admin
        ]);

        User::create([
            'name' => 'Admin Utama 2',
            'email' => 'admin2@gmail.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',  // Role admin
        ]);

        // Mahasiswa
        foreach (['Ahmad', 'Bunga', 'Cantika', 'Doni', 'Erlangga', 'Firda', 'Glorio', 'Husein', 'Ijat', 'Kartika'] as $name) {
            User::create([
                'name' => $name,
                'email' => strtolower($name) . '@gmail.com',
                'password' => Hash::make(strtolower($name) . '01'),
                'role' => 'mahasiswa',
                'semester' => 5,
            ]);
        }

        // Dosen
        foreach (['El S.Kom', 'Gea David S.Kom.Kom', 'Nasrudiin S.Kom', 'Malik S.Kom.Kom', 'Devi S.Kom M.Kom', 'Richi S.Kom', 'Cintantya S.Kom M.kom', 'Rifqi S.Kom', 'Afrienda S.Kom', 'Nabil S.kom'] as $name) {
            User::create([
                'name' => $name,
                'email' => strtolower(str_replace(' ', '', $name)) . '@gmail.com',
                'password' => Hash::make(strtolower(explode(' ', $name)[0]) . '01'), // Menggunakan nama depan untuk password
                'role' => 'dosen',
            ]);
        }

        // Manajemen
        User::create([
            'name' => 'Aulia',
            'email' => 'aulia@gmail.com',
            'password' => Hash::make('password123'),
            'role' => 'manajemen',
        ]);

        // Seeder Dummy menggunakan Faker
        $faker = Faker::create();

        // Seeder untuk Admin
        foreach (range(1, 5) as $index) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('password123'),
                'role' => 'admin', // Role default sebagai admin
            ]);
        }

        // Seeder untuk Mahasiswa
        foreach (range(1, 3472) as $index) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('password123'),
                'role' => 'mahasiswa',
                'semester' => rand(1, 8), // Menambahkan semester secara acak antara 1-8
            ]);
        }

        // Seeder untuk Dosen
        foreach (range(1, 170) as $index) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make(strtolower(explode(' ', $faker->name)[0]) . '01'), // Menggunakan nama depan untuk password
                'role' => 'dosen',
            ]);
        }

        // Seeder untuk Manajemen
        foreach (range(1, 5) as $index) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('password123'),
                'role' => 'manajemen',
            ]);
        }
    }
}