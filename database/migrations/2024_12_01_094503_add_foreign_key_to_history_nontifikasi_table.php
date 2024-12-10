<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToHistoryNontifikasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::table('history_nontifikasi', function (Blueprint $table) {
        $table->foreign('manajemen_id')
              ->references('id')
              ->on('manajemen')
              ->onDelete('cascade');
    });
}

public function down()
{
    Schema::table('history_nontifikasi', function (Blueprint $table) {
        $table->dropForeign(['manajemen_id']);
    });
}


}
