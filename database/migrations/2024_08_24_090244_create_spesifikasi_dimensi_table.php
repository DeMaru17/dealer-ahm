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
        Schema::create('spesifikasi_dimensi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_motor')->constrained('motor')->onDelete('cascade');
            $table->string('panjangxlebarxtinggi');
            $table->string('jarak_sumbu_roda');
            $table->string('jarak_terendah_ke_tanah');
            $table->string('ketinggian_tempat_duduk');
            $table->string('berat_kosong');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spesifikasi_dimensi');
    }
};
