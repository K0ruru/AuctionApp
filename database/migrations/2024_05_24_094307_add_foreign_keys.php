<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lelang', function (Blueprint $table) {
            $table->foreign('id_user')->references('id_user')->on('masyarakat')->onDelete('cascade');
            $table->foreign('id_petugas')->references('id_petugas')->on('petugas')->onDelete('cascade');
            $table->foreign('id_barang')->references('id_barang')->on('barang')->onDelete('cascade');
        });

        Schema::table('history_lelang', function (Blueprint $table) {
            $table->foreign('id_lelang')->references('id_lelang')->on('lelang')->onDelete('cascade');
            $table->foreign('id_barang')->references('id_barang')->on('barang')->onDelete('cascade');
            $table->foreign('id_user')->references('id_user')->on('masyarakat')->onDelete('cascade');
        });

        Schema::table('petugas', function (Blueprint $table) {
            $table->foreign('id_level')->references('id_level')->on('level')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lelang', function (Blueprint $table) {
            $table->dropForeign(['id_user']);
            $table->dropForeign(['id_petugas']);
            $table->dropForeign(['id_barang']);
        });

        Schema::table('history_lelang', function (Blueprint $table) {
            $table->dropForeign(['id_lelang']);
            $table->dropForeign(['id_barang']);
            $table->dropForeign(['id_user']);
        });

        Schema::table('petugas', function (Blueprint $table) {
            $table->dropForeign(['id_level']);
        });
    }
}
