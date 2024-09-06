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
        Schema::table('spesifikasi_mesin', function (Blueprint $table) {
            $table->string('tipe_mesin')->nullable()->change();
            $table->string('tipe_transmisi')->nullable()->change();
            $table->string('tipe_kopling')->nullable()->change();
            $table->string('tipe_starter')->nullable()->change();
            $table->string('diameter_x_langkah')->nullable()->change();
            $table->string('volume_langkah')->nullable()->change();
            $table->string('daya_maksimum')->nullable()->change();
            $table->string('torsi_maksimum')->nullable()->change();
            $table->string('busi')->nullable()->change();
            $table->string('sistem_bahan_bakar')->nullable()->change();
            $table->string('pengapian')->nullable()->change();
            $table->string('tipe_pendingin')->nullable()->change();
            $table->string('perbandingan_kompresi')->nullable()->change();
            $table->string('pola_perpindahan_gigi')->nullable()->change();
            $table->string('jenis_pelumas')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('spesifikasi_mesin', function (Blueprint $table) {
            $table->string('tipe_mesin')->nullable(false)->change();
            $table->string('tipe_transmisi')->nullable(false)->change();
            $table->string('tipe_kopling')->nullable(false)->change();
            $table->string('tipe_starter')->nullable(false)->change();
            $table->string('diameter_x_langkah')->nullable(false)->change();
            $table->string('volume_langkah')->nullable(false)->change();
            $table->string('daya_maksimum')->nullable(false)->change();
            $table->string('torsi_maksimum')->nullable(false)->change();
            $table->string('busi')->nullable(false)->change();
            $table->string('sistem_bahan_bakar')->nullable(false)->change();
            $table->string('pengapian')->nullable(false)->change();
            $table->string('tipe_pendingin')->nullable(false)->change();
            $table->string('perbandingan_kompresi')->nullable(false)->change();
            $table->string('pola_perpindahan_gigi')->nullable(false)->change();
            $table->string('jenis_pelumas')->nullable(false)->change();
        });
    }
};
