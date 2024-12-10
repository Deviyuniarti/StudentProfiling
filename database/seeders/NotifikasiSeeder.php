<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NontifikasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'penerima_id' => 'mahasiswa',
                'penerima_id' => 'Informasi Akademik',
                'isi_nontifikasi' => 'Jadwal ujian telah diperbarui, silakan cek di sistem.',
                'tanggal_waktu' => now(),
                'status_baca' => false,
                'nim' => '87654321',
                'nidn' => null,
                'history_nontifikasi_id'  
            ],
            [
                'penerima_id' => 'mahasiswa',
                'jenis_nontifikasi' => 'Jadwal Ujian',
                'isi_nontifikasi' => 'Rapat evaluasi akan dilaksanakan besok pukul 09.00 di ruang rapat.',
                'tanggal_waktu' => now(),
                'status_baca' => false,
                'nim' => null,
                'nidn' => '07738627',
                'history_nontifikasi_id'  
            ],
            [
                'penerima_id' => 'MHS002', // ID penerima mahasiswa
                'jenis_nontifikasi' => 'Pengumuman Kelulusan',
                'isi_nontifikasi' => 'Selamat, Anda telah dinyatakan lulus! Silakan cek portal untuk informasi lebih lanjut.',
                'tanggal_waktu' => now(),
                'status_baca' => true,
                'mahasiswa_id' => '12345678',
                'nidn' => '87654321',
                'history_nontifikasi_id'            
            ],
        ];

        foreach ($data as $nontifikasi) {
            DB::table('nontifikasi')->updateOrInsert(
                ['nontifikasi_id' => $nontifikasi['nontifikasi_id']],
                $nontifikasi
            );
        }
    }
}
