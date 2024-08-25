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
        Schema::create('gambar_motor', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_motor')->constrained('motor')->onDelete('cascade');
            $table->string('gambar_1')->nullable();
            $table->string('gambar_2')->nullable();
            $table->string('gambar_3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gambar_motor');
    }
};
