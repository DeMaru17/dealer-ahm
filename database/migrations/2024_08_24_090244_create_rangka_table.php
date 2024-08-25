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
        Schema::create('rangka', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_motor')->constrained('motor')->onDelete('cascade');
            $table->string('tipe_suspensi_depan');
            $table->string('tipe_suspensi_belakang');
            $table->string('ukuran_ban_depan');
            $table->string('ukuran_ban_belakang');
            $table->string('tipe_rem_depan');
            $table->string('tipe_rem_belakang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rangka');
    }
};
