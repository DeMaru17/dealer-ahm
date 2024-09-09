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
        Schema::table('spesifikasi_dimensi', function (Blueprint $table) {
            $table->string('panjangxlebarxtinggi')->nullable()->change();;
            $table->string('jarak_sumbu_roda')->nullable()->change();;
            $table->string('jarak_terendah_ke_tanah')->nullable()->change();;
            $table->string('ketinggian_tempat_duduk')->nullable()->change();;
            $table->string('berat_kosong')->nullable()->change();;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('spesifikasi_dimensi', function (Blueprint $table) {
            $table->string('panjangxlebarxtinggi')->nullable(false)->change();;
            $table->string('jarak_sumbu_roda')->nullable(false)->change();;
            $table->string('jarak_terendah_ke_tanah')->nullable(false)->change();;
            $table->string('ketinggian_tempat_duduk')->nullable(false)->change();;
            $table->string('berat_kosong')->nullable(false)->change();;
        });;
    }
};
