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
        Schema::table('series_motor', function (Blueprint $table) {
            $table->renameColumn('id_motor', 'motor_id');
            $table->dropForeign('series_motor_id_motor_foreign');
            $table->unsignedBigInteger('motor_id')->change();
            $table->foreign('motor_id')->references('id')->on('motor')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('series_motor', function (Blueprint $table) {
            $table->renameColumn('motor_id', 'id_motor');
            $table->dropForeign('series_motor_motor_id_foreign');
            $table->foreignId('id_motor')->constrained('motor')->onDelete('cascade')->change();
        });
    }
};
