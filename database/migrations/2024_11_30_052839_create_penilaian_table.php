<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenilaianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penilaian', function (Blueprint $table) {
            $table->id();
            $table->integer('tugas_id');
            $table->integer('nim');
            $table->foreign('nim')->references('nim')->on('mahasiswa')->onDelete('cascade'); 
            $table->integer('nidn');
            $table->foreign('nidn')->references('nidn')->on('dosen')->onDelete('cascade');
            $table->decimal('nilai', 5, 2);
            $table->text('catatan');
            $table->datetime('tanggal_penilaian');
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
        Schema::dropIfExists('penilaian');
    }
}
