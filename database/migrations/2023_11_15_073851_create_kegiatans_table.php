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
        Schema::create('kegiatans', function (Blueprint $table) {
            $table->id();
            $table->string('namaKegiatan');
            $table->time('jamMulai');
            $table->time('jamAkhir');
            $table->date('tanggalKegiatanMulai');
            $table->date('tanggalKegiatanAkhir');
            $table->text('tentangKegiatan');
            $table->text('gambarKegiatan');
            $table->text('deskripsiKegiatan');
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
        Schema::dropIfExists('kegiatans');
    }
};
