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
            $table->unique('id_motor'); // add unique constraint to id_motor column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('gambar_motor', function (Blueprint $table) {
            $table->dropUnique('gambar_motor_id_motor_unique'); // drop unique constraint on rollback
        });
    }
};
