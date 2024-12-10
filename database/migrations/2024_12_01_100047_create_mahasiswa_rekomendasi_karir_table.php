<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaRekomendasiKarirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa_rekomendasi_karir', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nim')->constrained('mahasiswa')->onDelete('cascade');
            $table->foreignId('rekomendasi_karir_id') ->constrained('rekomendasi_karir') ->onDelete('cascade');     
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa_rekomendasi_karir');  // Menghapus tabel pivot jika rollback
    }
}
