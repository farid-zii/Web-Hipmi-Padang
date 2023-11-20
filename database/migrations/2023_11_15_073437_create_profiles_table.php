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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->text('tentang');
            $table->text('logo');
            $table->text('visi');
            $table->text('misi');
            $table->text('telephone');
            $table->text('whatapps');
            $table->text('insatgram');
            $table->text('facebook');
            $table->text('twitter');
            $table->text('youtube');
            $table->text('email');
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
        Schema::dropIfExists('profiles');
    }
};
