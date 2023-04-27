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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('kelas');
            $table->string('guru');
            $table->integer('jumlah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};

// public function up(): void
// {
//     Schema::create('absences', function (Blueprint $table) {
//         $table->id();
//         $table->unsignedBigInteger('siswa_id');
//         $table->foreign('siswa_id')->references('id')->on('siswas');
//         $table->unsignedBigInteger('teacher_id');
//         $table->foreign('teacher_id')->references('id')->on('teachers');
//         $table->unsignedBigInteger('room_id');
//         $table->foreign('room_id')->references('id')->on('rooms');
//         $table->integer('absen')->nullable();
//         $table->tinyInteger('permission')->default(0);
//         $table->timestamps();
//     });
// }