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
        Schema::table('kelistrikan', function (Blueprint $table) {
            $table->string('tipe_baterai_atau_aki')->nullable()->change();
            $table->string('sistem_pengapian')->nullable()->change();
            $table->string('tipe_busi')->nullable()->change();
            $table->string('power_charger')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kelistrikan', function (Blueprint $table) {
            $table->string('tipe_baterai_atau_aki')->nullable()->change();
            $table->string('sistem_pengapian')->nullable()->change();
            $table->string('tipe_busi')->nullable()->change();
            $table->string('power_charger')->nullable()->change();
        });
    }
};
