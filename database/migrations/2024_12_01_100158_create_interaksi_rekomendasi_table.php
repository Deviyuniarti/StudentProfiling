<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInteraksiRekomendasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interaksi_rekomendasi', function (Blueprint $table) {
            $table->id();
            $table->integer('nim'); // Foreign key untuk mahasiswa
            $table->foreign('nim')->references('nim')->on('mahasiswa')->onDelete('cascade'); // Relasi ke mahasiswa
            $table->foreignId('rekomendasi_id')->constrained('rekomendasi_karir')->onDelete('cascade'); // Relasi ke rekomendasi karir
            $table->boolean('suka')->default(false);
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
        Schema::dropIfExists('interaksi_rekomendasi');
    }
}
