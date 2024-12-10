<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekomendasiKarirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekomendasi_karir', function (Blueprint $table) {
            $table->id();
            $table->string('jalur_karir'); // Nama jalur karir utama
            $table->text('deskripsi');
            $table->text('keterampilan_diperlukan');
            $table->text('tools');
            $table->text('rencana_pengembangan');
        
            // Kolom pemberi rekomendasi (dosen atau admin)
            $table->string('created_by_type'); // 'admin' atau 'dosen'
            $table->unsignedBigInteger('created_by_id'); // ID admin atau dosen
        
            $table->foreign('created_by_id')->references('id')->on('users')->onDelete('cascade'); // Relasi ke user
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
        Schema::dropIfExists('rekomendasi_karir');
    }
}
