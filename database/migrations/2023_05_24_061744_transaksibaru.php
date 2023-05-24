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
        Schema::create('transaksibaru', function (Blueprint $table) {
            $table->id();
            $table->string('id_transaksibaru', 10)->nullable()->unique();
            $table->unsignedBigInteger('id_nasabah');
            $table->unsignedBigInteger('id_sopir')->nullable();
            $table->foreign('id_nasabah')->references('id')->on('nasabah')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_sopir')->references('id')->on('sopir')->onDelete('cascade')->onUpdate('cascade');
            $table->date('tanggal_pengambilan')->nullable();
            $table->string('konfirmasi',255)->nullable();
            $table->string('jenis_sampah',30)->nullable();
            $table->integer('berat')->nullable();
            $table->integer('harga')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksibaru');
    }
};
