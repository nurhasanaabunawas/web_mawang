<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenduduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduks', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('perincian');
            $table->string('status');
            $table->string('bulan');
            $table->string('nama_lingkungan');
            $table->string('jenis_kelamin');
            $table->BigInteger('nik');
            $table->BigInteger('kk');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('no_akta_kelahiran');
            $table->string('usia');
            $table->string('kota');
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
        Schema::dropIfExists('penduduks');
    }
}
