<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::table('nasabah', function(Blueprint $table) {
            $table->string('email')->after('phone')->nullable();
            $table->string('password')->after('email')->nullable();
            $table->string('foto')->after('nama')->nullable();
        });
        Schema::table('sopir', function(Blueprint $table) {
            $table->string('email')->after('phone')->nullable();
            $table->string('password')->after('email')->nullable();
            $table->string('foto')->after('nama')->nullable();
        });
        Schema::table('sampah',function(Blueprint $table){
            $table->string('foto')->after('jenis_sampah')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
