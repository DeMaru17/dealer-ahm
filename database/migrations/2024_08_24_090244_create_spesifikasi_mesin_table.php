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
        Schema::create('spesifikasi_mesin', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_motor')->constrained('motor')->onDelete('cascade');
            $table->string('tipe_mesin');
            $table->string('tipe_transmisi');
            $table->string('tipe_kopling');
            $table->string('tipe_starter');
            $table->string('diameter_x_langkah');
            $table->string('volume_langkah');
            $table->string('daya_maksimum');
            $table->string('torsi_maksimum');
            $table->string('busi');
            $table->string('sistem_bahan_bakar');
            $table->string('pengapian');
            $table->string('tipe_pendingin');
            $table->string('perbandingan_kompresi');
            $table->string('pola_perpindahan_gigi');
            $table->string('jenis_pelumas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spesifikasi_mesin');
    }
};
