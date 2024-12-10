<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNontifikasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nontifikasi', function (Blueprint $table) {
            $table->id();
            $table->integer('penerima_id'); // ID penerima, bisa mahasiswa atau dosen
            $table->string('jenis_nontifikasi');
            $table->text('isi_nontifikasi');
            $table->datetime('tanggal_waktu');
            $table->integer('nim')->nullable(); // Opsional, jika relevan untuk mahasiswa
            $table->integer('nidn')->nullable(); // Opsional, jika relevan untuk dosen
            $table->foreignId('history_nontifikasi_id')->nullable()->constrained('history_nontifikasi')->onDelete('cascade'); // Relasi ke history_nontifikasi (One-to-One)
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
        Schema::dropIfExists('nontifikasi');
    }
}
