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
        Schema::table('donasis', function (Blueprint $table){
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->nullable();
        });

        Schema::table('laporan_keuangans', function (Blueprint $table){
            $table->foreign('total_pemasukan_id')->references('id')->on('donasis')->onDelete('cascade')->nullable();
            $table->foreign('keuangan_id')->references('id')->on('keuangans')->onDelete('cascade')->nullable();
        });

        Schema::table('anggota_kemasjidans', function (Blueprint $table){
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->nullable();
        });

        Schema::table('jadwal_imams', function (Blueprint $table){
            $table->foreign('imam_id')->references('id')->on('anggota_kemasjidans')->onDelete('cascade')->nullable();
        });




    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
