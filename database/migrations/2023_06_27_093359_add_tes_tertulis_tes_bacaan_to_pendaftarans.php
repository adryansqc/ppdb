<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pendaftarans', function (Blueprint $table) {
            $table->integer('tes_tertulis')->nullable();
            $table->integer('tes_bacaan')->nullable();
            $table->enum('hasil', ['Menunggu Verifikasi', 'Lulus', 'Tidak Lulus'])->default('Menunggu Verifikasi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pendaftarans', function (Blueprint $table) {
            $table->dropColumn('tes_tertulis');
            $table->dropColumn('tes_bacaan');
        });
    }
};
