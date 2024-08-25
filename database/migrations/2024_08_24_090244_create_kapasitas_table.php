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
        Schema::create('kapasitas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_motor')->constrained('motor')->onDelete('cascade');
            $table->string('kapasitas_tangki_bahan_bakar');
            $table->string('kapasitas_minyak_pelumas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kapasitas');
    }
};
