<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Mahasiswa;
use App\Models\User;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
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
                'nim' => '202139401',
                'nama' => 'Ahmad',
                'tanggal_lahir' => '2005-05-16',
                'program_studi' => 'Teknik Infromatika',
                'user_id' => User::where('email', 'admin1@admin.com')->first()->id ?? null,  // Menyambungkan ke user dengan email admin
            ],
            [
                'nim' => '202139402',
                'nama' => 'Bunga',
                'tanggal_lahir' => '2003-07-23',
                'program_studi' => 'Teknik Infromatika',
                'user_id' => User::where('email', 'admin2@admin.com')->first()->id ?? null,  // Menyambungkan ke user kedua
            ],
            [
                'nim' => '202139403',
                'nama' => 'Cantika',
                'tanggal_lahir' => '2000-07-13',
                'program_studi' => 'Teknik Infromatika',
                'user_id' => User::where('email', 'admin1@admin.com')->first()->id ?? null,  // Menyambungkan ke user dengan email admin
            ],
            [
                'nim' => '202139404', 
                'nama' => 'Doni',
                'tanggal_lahir' => '2001-05-10',
                'program_studi' => 'Teknik Infromatika',
                'user_id' => User::where('email', 'admin2@admin.com')->first()->id ?? null,  // Menyambungkan ke user kedua
            ],
            [
                'nim' => '202139405', 
                'nama' => 'Erlangga',
                'tanggal_lahir' => '2002-06-11',
                'program_studi' => 'Teknik Infromatika',
                'user_id' => User::where('email', 'admin1@admin.com')->first()->id ?? null,  // Menyambungkan ke user dengan email admin
            ],
            [
                'nim' => '202139406', 
                'nama' => 'Firda',
                'tanggal_lahir' => '2001-05-29',
                'program_studi' => 'Teknik Infromatika',
                'user_id' => User::where('email', 'admin2@admin.com')->first()->id ?? null,  // Menyambungkan ke user kedua
            ],
            [
                'nim' => '202139407', 
                'nama' => 'Glorio',
                'tanggal_lahir' => '2001-01-10',
                'program_studi' => 'Teknik Infromatika',
                'user_id' => User::where('email', 'admin2@admin.com')->first()->id ?? null,  // Menyambungkan ke user dengan email admin
            ],
            [
                'nim' => '202139408', 
                'nama' => 'Husein',
                'tanggal_lahir' => '2004-05-02',
                'program_studi' => 'Teknik Infromatika',
                'user_id' => User::where('email', 'admin2@admin.com')->first()->id ?? null,  // Menyambungkan ke user kedua
            ],
            [
                'nim' => '202139409', 
                'nama' => 'Ijat',
                'tanggal_lahir' => '2004-10-24',
                'program_studi' => 'Teknik Infromatika',
                'user_id' => User::where('email', 'admin1@admin.com')->first()->id ?? null,  // Menyambungkan ke user dengan email admin
            ],
            [
                'nim' => '202139410', 
                'nama' => 'kartika',
                'tanggal_lahir' => '2004-10-24',
                'program_studi' => 'Teknik Infromatika',
                'user_id' => User::where('email', 'admin2@admin.com')->first()->id ?? null,  // Menyambungkan ke user kedua
            ],
        ];

        // Menggunakan Faker untuk data dummy
        $faker = Faker::create();

        foreach ($data as $item) {
            Mahasiswa::create($item);
        }

        // Seeder untuk Mahasiswa Dummy
        foreach (range(1, 10) as $index) {
            Mahasiswa::create([
                'nim' => $faker->unique()->numerify('2021394##'),
                'nama' => $faker->name,
                'tanggal_lahir' => $faker->date(),
                'email' => $faker->unique()->safeEmail,
                'program_studi' => $faker->word,
                'password' => Hash::make('password123'),
                'user_id' => User::where('role', 'mahasiswa')->inRandomOrder()->first()->id, // Mengaitkan dengan pengguna acak
            ]);
        }
    }
}
