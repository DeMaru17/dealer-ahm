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
        Schema::table('gambar_motor', function (Blueprint $table) {
            $table->string('gambar_produk')->after('id_motor')->nullable();
            $table->string('gambar_carousel1')->after('gambar_produk')->nullable();
            $table->string('gambar_carousel2')->after('gambar_carousel1')->nullable();
            $table->string('gambar_carousel3')->after('gambar_carousel2')->nullable();
            $table->string('gambar_4')->after('gambar_3')->nullable();
            $table->string('gambar_5')->after('gambar_4')->nullable();
            $table->string('gambar_6')->after('gambar_5')->nullable();
            $table->string('gambar_7')->after('gambar_6')->nullable();
            $table->string('gambar_8')->after('gambar_7')->nullable();
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
