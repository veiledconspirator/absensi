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
        Schema::create('absences', function (Blueprint $table) {
            $table->id();
            $table->integer('absen')->nullable();
            $table->string('nama')->nullable();
            $table->integer('kelas')->nullable();
            $table->tinyInteger('masuk')->nullable();
            $table->tinyInteger('sakit')->nullable();
            $table->tinyInteger('izin')->nullable();
            $table->tinyInteger('alpha')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absences');
    }
};
