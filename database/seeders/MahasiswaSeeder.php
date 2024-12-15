<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;
use App\Models\User;
use App\Models\Jurusan;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil semua data jurusan
        $jurusan = Jurusan::pluck('id', 'nama')->toArray();

        // Data Manual
        $data = [
            [
                'nim' => '202139401',
                'nama' => 'Ahmad',
                'tanggal_lahir' => '2005-05-16',
                'program_studi' => 'Teknologi Informatika Multimedia',
                'user_id' => User::where('email', 'admin1@gmail.com')->first()->id ?? null,
                'jurusan_id' => $jurusan['Teknik Informatika'] ?? null,
            ],
            [
                'nim' => '202139402',
                'nama' => 'Bunga',
                'tanggal_lahir' => '2003-07-23',
                'program_studi' => 'Teknologi Informatika Multimedia',
                'user_id' => User::where('email', 'admin2@gmail.com')->first()->id ?? null,
                'jurusan_id' => $jurusan['Teknik Informatika'] ?? null,
            ],
            [
                'nim' => '202139403',
                'nama' => 'Cantika',
                'tanggal_lahir' => '2000-07-13',
                'program_studi' => 'Teknologi Informatika Multimedia',
                'user_id' => User::where('email', 'admin1@gmail.com')->first()->id ?? null,
                'jurusan_id' => $jurusan['Teknik Informatika'] ?? null,
            ],
            [
                'nim' => '202139404',
                'nama' => 'Doni',
                'tanggal_lahir' => '2001-05-10',
                'program_studi' => 'Teknologi Informatika Multimedia',
                'user_id' => User::where('email', 'admin2@gmail.com')->first()->id ?? null,
                'jurusan_id' => $jurusan['Teknik Informatika'] ?? null,
            ],
            [
                'nim' => '202139405',
                'nama' => 'Erlangga',
                'tanggal_lahir' => '2002-06-11',
                'program_studi' => 'Teknologi Informatika Multimedia',
                'user_id' => User::where('email', 'admin1@gmail.com')->first()->id ?? null,
                'jurusan_id' => $jurusan['Teknik Informatika'] ?? null,
            ],
            [
                'nim' => '202139406',
                'nama' => 'Firda',
                'tanggal_lahir' => '2001-05-29',
                'program_studi' => 'Teknologi Informatika Multimedia',
                'user_id' => User::where('email', 'admin2@gmail.com')->first()->id ?? null,
                'jurusan_id' => $jurusan['Teknik Informatika'] ?? null,
            ],
            [
                'nim' => '202139407',
                'nama' => 'Glorio',
                'tanggal_lahir' => '2001-01-10',
                'program_studi' => 'Teknologi Informatika Multimedia',
                'user_id' => User::where('email', 'admin2@gmail.com')->first()->id ?? null,
                'jurusan_id' => $jurusan['Teknik Informatika'] ?? null,
            ],
            [
                'nim' => '202139408',
                'nama' => 'Husein',
                'tanggal_lahir' => '2004-05-02',
                'program_studi' => 'Teknologi Informatika Multimedia',
                'user_id' => User::where('email', 'admin2@gmail.com')->first()->id ?? null,
                'jurusan_id' => $jurusan['Teknik Informatika'] ?? null,
            ],
            [
                'nim' => '202139409',
                'nama' => 'Ijat',
                'tanggal_lahir' => '2004-10-24',
                'program_studi' => 'Teknologi Informatika Multimedia',
                'user_id' => User::where('email', 'admin1@gmail.com')->first()->id ?? null,
                'jurusan_id' => $jurusan['Teknik Informatika'] ?? null,
            ],
            [
                'nim' => '202139410',
                'nama' => 'Kartika',
                'tanggal_lahir' => '2004-10-24',
                'program_studi' => 'Teknologi Informatika Multimedia',
                'user_id' => User::where('email', 'admin2@gmail.com')->first()->id ?? null,
                'jurusan_id' => $jurusan['Teknik Informatika'] ?? null,
            ],
            [
                'nim' => '202139411',
                'nama' => 'Lia',
                'tanggal_lahir' => '2003-08-12',
                'program_studi' => 'Teknik Sipil',
                'user_id' => User::where('email', 'admin1@gmail.com')->first()->id ?? null,
                'jurusan_id' => $jurusan['Teknik Sipil'] ?? null,
            ],
            [
                'nim' => '202139412',
                'nama' => 'Mira',
                'tanggal_lahir' => '2002-02-25',
                'program_studi' => 'Teknik Mesin',
                'user_id' => User::where('email', 'admin2@gmail.com')->first()->id ?? null,
                'jurusan_id' => $jurusan['Teknik Mesin'] ?? null,
            ],
            [
                'nim' => '202139413',
                'nama' => 'Novi',
                'tanggal_lahir' => '2003-12-02',
                'program_studi' => 'Teknik Elektro',
                'user_id' => User::where('email', 'admin1@gmail.com')->first()->id ?? null,
                'jurusan_id' => $jurusan['Teknik Elektro'] ?? null,
            ],
            [
                'nim' => '202139414',
                'nama' => 'Oka',
                'tanggal_lahir' => '2001-09-14',
                'program_studi' => 'Akuntansi',
                'user_id' => User::where('email', 'admin2@gmail.com')->first()->id ?? null,
                'jurusan_id' => $jurusan['Akuntansi'] ?? null,
            ],
            [
                'nim' => '202139415',
                'nama' => 'Putu',
                'tanggal_lahir' => '2000-11-09',
                'program_studi' => 'Administrasi Bisnis',
                'user_id' => User::where('email', 'admin1@gmail.com')->first()->id ?? null,
                'jurusan_id' => $jurusan['Administrasi Bisnis'] ?? null,
            ]
        ];

        // Insert manual data
        foreach ($data as $item) {
            Mahasiswa::create($item);
        }
    }
}
