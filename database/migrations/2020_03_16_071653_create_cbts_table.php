<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCbtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('cbts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('kabupaten_id');
            $table->string('nama_kabupaten');
            $table->string('nama');
            $table->string('email');
            $table->string('no_hp');
            $table->timestamps();

        $table->foreign('user_id')->references('id')->on('users');
        $table->foreign('kabupaten_id')->references('id')->on('kabupatens');			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cbts');
    }
}
