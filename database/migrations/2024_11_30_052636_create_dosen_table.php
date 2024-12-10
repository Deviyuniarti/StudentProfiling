<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosen', function (Blueprint $table) {
            $table->id();
            $table->integer('nidn')->unique();
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('password'); 
            $table->foreignId('departemen_id')->constrained('departemen')->onDelete('cascade'); // Relasi ke tabel departemen
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Relasi ke tabel users (menggunakan user_id)
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
        Schema::table('dosen', function (Blueprint $table) {
            // Drop foreign keys terlebih dahulu
            $table->dropForeign(['departemen_id']);
            $table->dropForeign(['user_id']);
        });

        // Hapus tabel dosen
        Schema::dropIfExists('dosen');
    }
}
