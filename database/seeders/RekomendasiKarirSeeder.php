<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RekomendasiKarirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data untuk tabel rekomendasi_karir
        $rekomendasi_karir = [
            [
                'jalur_karir' => 'Software Engineer',
                'penyesuaian_manual' => 'Pelatihan dalam pengembangan perangkat lunak',
                'peluang_magang' => 'Magang di perusahaan pengembangan perangkat lunak terkemuka',
                'manajemen_id' => 1,
                'nidn' => '07738627'
            ],
            [
                'jalur_karir' => 'Data Scientist',
                'penyesuaian_manual' => 'Pelatihan dalam analisis data dan machine learning',
                'peluang_magang' => 'Magang di perusahaan yang fokus pada data science',
                'manajemen_id' => 2,
                'nidn' => '87654321'
            ],
            [
                'jalur_karir' => 'Cyber Security Specialist',
                'penyesuaian_manual' => 'Pelatihan dalam keamanan siber dan penetrasi testing',
                'peluang_magang' => 'Magang di perusahaan yang bergerak di bidang keamanan siber',
                'manajemen_id' => 3,
                'nidn' => '889392'
            ],
        ];

        // Masukkan data rekomendasi karir
        foreach ($rekomendasi_karir as $rekomendasi) {
            DB::table('rekomendasi_karir')->updateOrInsert(
                ['jalur_karir' => $rekomendasi['jalur_karir']],  // Menggunakan jalur karir sebagai kunci unik
                $rekomendasi
            );
        }

        // Mendapatkan ID dari rekomendasi_karir yang baru dimasukkan
        $rekomendasi_karir_ids = DB::table('rekomendasi_karir')->pluck('id', 'jalur_karir');

        // Data untuk tabel pivot mahasiswa_has_rekomendasi_karier
        $mahasiswa_rekomendasi = [
            ['mahasiswa_id' => '12345678', 'rekomendasi_karir_id' => $rekomendasi_karir_ids['Software Engineer']],
            ['mahasiswa_id' => '87654321', 'rekomendasi_karir_id' => $rekomendasi_karir_ids['Data Scientist']],
            ['mahasiswa_id' => '66389072', 'rekomendasi_karir_id' => $rekomendasi_karir_ids['Cyber Security Specialist']],
        ];

        // Masukkan data ke tabel pivot
        foreach ($mahasiswa_rekomendasi as $pivot) {
            DB::table('mahasiswa_has_rekomendasi_karier')->updateOrInsert(
                ['mahasiswa_id' => $pivot['mahasiswa_id'], 'rekomendasi_karir_id' => $pivot['rekomendasi_karir_id']],
                $pivot
            );
        }
    }
}
