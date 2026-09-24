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
        Schema::create('projects', function (Blueprint $table) {
           
                $table->id();

                $table->string('nama_project');
                $table->string('jenis_project');
                $table->string('kategori_peserta')->nullable();
                $table->text('deskripsi')->nullable();
                $table->string('thumbnail')->nullable();
                $table->date('tanggal')->nullable();

                $table->timestamps();
            });
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
