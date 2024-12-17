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
        Schema::create('details', function (Blueprint $table) {
            $table->id('id_detail'); // Primary key
            $table->unsignedBigInteger('id_projek'); // Foreign key ke tabel projects
            $table->string('nama_detail'); // Nama detail
            $table->string('foto_1'); // Foto utama (wajib)
            $table->string('foto_2')->nullable(); // Foto tambahan (opsional)
            $table->string('foto_3')->nullable(); // Foto tambahan (opsional)
            $table->timestamps();

            // Relasi ke tabel projects
            $table->foreign('id_projek')->references('id')->on('projects')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details');
    }
};
