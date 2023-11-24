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
        Schema::create('kepengurusans', function (Blueprint $table) {
            $table->id();
            $table->string('tahunMulai');
            $table->string('tahunAkhir');
            $table->foreignId('ketua');
            $table->foreignId('waket_1');
            $table->foreignId('waket_2');
            $table->foreignId('waket_3');
            $table->foreignId('sekretaris');
            $table->foreignId('wasek_1');
            $table->foreignId('wasek_2');
            $table->foreignId('wasek_3');
            $table->foreignId('wasek_4');
            $table->foreignId('wasek_5');
            $table->foreignId('wasek_6');
            $table->foreignId('bendahara');
            $table->foreignId('waben_1');
            $table->foreignId('waben_2');
            $table->foreignId('waben_3');
            $table->foreignId('waben_4');
            $table->foreignId('kabid_1');
            $table->foreignId('kabid_2');
            $table->foreignId('kabid_3');
            $table->foreignId('kabid_4');
            $table->foreignId('kabid_5');
            $table->foreignId('kabid_6');
            $table->foreignId('kabid_7');
            $table->foreignId('kabid_8');
            $table->foreignId('kabid_9');
            $table->foreignId('kabid_10');
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
        Schema::dropIfExists('kepengurusans');
    }
};
