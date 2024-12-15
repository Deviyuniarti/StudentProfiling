<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AdminSeeder::class, 
            MahasiswaSeeder::class,
            DosenSeeder::class,
            DepartemenSeeder::class,
            ManajemenSeeder::class,
            IpkSeeder::class,
            PenilaianSeeder::class,
            NontifikasiSeeder::class,
            RekomendasiKarirSeeder::class,
            HistoryNontifikasiSeeder::class,
            UmpanBalikSeeder::class,
            RoleSeeder::class,
            MataKuliahSeeder::class,
            JurusanSeeder::class,
            MitraSeeder::class,
            UserSeeder::class
        ]);
    }
}
