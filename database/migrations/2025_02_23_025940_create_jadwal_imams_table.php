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
        Schema::create('jadwal_imams', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('imam_id')->nullable();
            $table->date('tanggal');
            $table->string('waktu_shalat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_imams');
    }
};
