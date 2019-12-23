<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('mahasiswas');
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->string('nim', 50)->primary();
            $table->string('password');
            $table->string('nama');
            $table->string('jurusan');
            $table->integer('angkatan');
            $table->string('foto_profil');
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
        Schema::dropIfExists('mahasiswas');
    }
}
