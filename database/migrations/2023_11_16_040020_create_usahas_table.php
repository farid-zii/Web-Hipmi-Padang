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
        Schema::create('usahas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_anggota');
            $table->foreignId('id_sektor');
            $table->text('gambar_usaha')->nullable();
            $table->text('logo')->nullable();
            $table->string('namaUsaha');
            $table->text('lokasi');
            $table->text('deskripsiUsaha');
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
        Schema::dropIfExists('usahas');
    }
};
