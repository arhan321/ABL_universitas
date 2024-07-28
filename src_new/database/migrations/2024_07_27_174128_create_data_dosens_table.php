<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data_dosens', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dosen');
            $table->string('lulusan');
            $table->string('email');
            $table->dateTime('ttl');
            $table->string('kode_dosen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_dosens');
    }
};
