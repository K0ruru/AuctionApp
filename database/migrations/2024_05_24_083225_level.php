<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('level', function (Blueprint $table) {
            $table->id('id_level');
            $table->enum('level', ['admin', 'petugas']);
        });

        // Insert default data
        DB::table('level')->insert([
            ['level' => 'admin'],
            ['level' => 'petugas'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('level');
    }
};
