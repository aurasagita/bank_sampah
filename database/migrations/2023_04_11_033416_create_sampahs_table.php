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
        Schema::create('sampah', function (Blueprint $table) {
            $table->id();
            $table->string('id_sampah',20)->unique();
            $table->string('nama')->nullable();
            $table->string('jenis',30)->nullable();
            $table->string('kode',10)->nullable();
            $table->float('harga_kelompok_langsung')->nullable();
            $table->float('harga_kelompok_tabung')->nullable();
            $table->float('harga_bsm_langsung')->nullable();
            $table->float('harga_bsm_tabung')->nullable();
            $table->float('harga_binaan_langsung')->nullable();
            $table->float('harga_binaan_tabung')->nullable();
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
        Schema::dropIfExists('sampah');
    }
};
