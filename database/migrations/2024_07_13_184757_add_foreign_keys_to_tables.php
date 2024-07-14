<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // database/migrations/xxxx_xx_xx_add_foreign_keys_to_tables.php
        Schema::table('sub_kriterias', function (Blueprint $table) {
            $table->foreign('kriteria_id')->references('id')->on('kriterias')->onDelete('cascade');
        });

        Schema::table('penduduks', function (Blueprint $table) {
            $table->foreign('kriteria_id')->references('id')->on('kriterias')->onDelete('cascade');
        });

        Schema::table('penduduk_sub_kriterias', function (Blueprint $table) {
            $table->foreign('penduduk_id')->references('id')->on('penduduks')->onDelete('cascade');
            $table->foreign('sub_kriteria_id')->references('id')->on('sub_kriterias')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tables', function (Blueprint $table) {
            //
        });
    }
};
