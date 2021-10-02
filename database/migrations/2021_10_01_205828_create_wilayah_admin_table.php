<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWilayahAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wilayah_admin', function (Blueprint $table) {
            $table->id();
            $table->string('nama_wilayah');
            $table->string('nama_ketua_rw');
            $table->string('nama_ketua_rt');
            $table->integer('rw');
            $table->integer('rt');
            $table->rememberToken();
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
        Schema::dropIfExists('wilayah_admin');
    }
}
