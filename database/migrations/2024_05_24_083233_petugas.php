<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('petugas', function (Blueprint $table) {
            $table->id('id_petugas');
            $table->string('nama_petugas');
            $table->string('username')->unique();
            $table->string('password');
            $table->unsignedBigInteger('id_level');
        });

        DB::table('petugas')->insert([
            [
                'nama_petugas' => 'admin',
                'username' => 'admin',
                'password' => Hash::make('12345678'),
                'id_level' => '1'
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('petugas');
    }
};

