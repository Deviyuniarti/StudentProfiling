<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        // Data Admin Utama (Manual) dengan email unik
        User::updateOrCreate([
            'email' => 'admin1@admin.com'
        ], [
            'name' => 'Admin Utama 1',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);

        User::updateOrCreate([
            'email' => 'admin2@admin.com'
        ], [
            'name' => 'Admin Utama 2',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);

        User::updateOrCreate([
            'email' => 'deviyuni866@gmail.com'
        ], [
            'name' => 'Devi Yuniarti',
            'password' => Hash::make('mahasiswa123'),
            'role' => 'mahasiswa',
        ]);

        User::updateOrCreate([
            'email' => 'rifqi@dosen.com'
        ], [
            'name' => 'Rifqi',
            'password' => Hash::make('dosen123'),
            'role' => 'dosen',
        ]);

        User::updateOrCreate([
            'email' => 'cintantya@manajemen.com'
        ], [
            'name' => 'Cintantya',
            'password' => Hash::make('manajemen123'),
            'role' => 'manajemen',
        ]);

        // Data Admin Dummy menggunakan Faker
        $faker = Faker::create();
        $roles = ['admin', 'dosen', 'mahasiswa', 'manajemen'];

        foreach (range(1, 217) as $index) {
            User::updateOrCreate([
                'email' => $faker->unique()->safeEmail, 
            ], [
                'name' => $faker->name,
                'password' => Hash::make('admin123'),
                'role' => $roles[array_rand($roles)], // Role acak
            ]);
        }
    }
}
