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
        Schema::create('anggotas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idDivisi');
            $table->foreignId('idJabatan');
            $table->string('nama');
            $table->string('email');
            $table->string('alamat');
            $table->string('noHp');
            $table->string('namaPerusahaan');
            $table->string('jKelamin');
            $table->string('tempatLahir');
            $table->date('tanggalLahir');
            $table->text('motto');
            $table->text('instagram');
            $table->text('twitter');
            $table->text('facebook');
            $table->text('linkedin');
            // $table->string('');
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
        Schema::dropIfExists('anggotas');
    }
};
