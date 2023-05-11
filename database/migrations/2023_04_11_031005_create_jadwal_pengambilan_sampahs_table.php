<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->id();
            $table->string('id_jadwal', 10)->unique();
            $table->string('id_nasabah', 10)->nullable();
            $table->string('id_sopir', 10)->nullable();
            $table->string('jenis_sampah', 10)->nullable();
            $table->string('konfirmasi', 1)->nullable();
            $table->float('berat', 8)->nullable();
            $table->float('alamat_pengambilan', 255)->nullable();
            $table->date('tanggal_penjadwalan', 50)->nullable();
            $table->date('tanggal_pengambilan', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal_pengambilan_sampah');
    }
};
