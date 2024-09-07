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
        Schema::table('rangka', function (Blueprint $table) {
            $table->string('tipe_suspensi_depan')->nullable()->change();
            $table->string('tipe_suspensi_belakang')->nullable()->change();
            $table->string('ukuran_ban_depan')->nullable()->change();
            $table->string('ukuran_ban_belakang')->nullable()->change();
            $table->string('tipe_rem_depan')->nullable()->change();
            $table->string('tipe_rem_belakang')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('rangka', function (Blueprint $table) {
            $table->string('tipe_suspensi_depan')->nullable(false)->change();
            $table->string('tipe_suspensi_belakang')->nullable(false)->change();
            $table->string('ukuran_ban_depan')->nullable(false)->change();
            $table->string('ukuran_ban_belakang')->nullable(false)->change();
            $table->string('tipe_rem_depan')->nullable(false)->change();
            $table->string('tipe_rem_belakang')->nullable(false)->change();
        });
    }
};
