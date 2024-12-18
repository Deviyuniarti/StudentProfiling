<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeterampilanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keterampilan', function (Blueprint $table) {
            $table->id();
            $table->string('judul_keterampilan'); // Judul Keterampilan
            $table->text('deskripsi'); // Deskripsi Keterampilan
            $table->string('keterampilan'); // Tingkat Keterampilan
            $table->string('media')->nullable(); // Media (misalnya gambar/file)
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
        Schema::dropIfExists('keterampilan');
    }
}
