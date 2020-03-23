<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBudayasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budayas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cbt_id');
            $table->string('nama_budaya');
            $table->string('deskripsi');
            $table->string('lokasi');
            $table->timestamps();

            $table->foreign('cbt_id')->references('id')->on('cbts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('budayas');
    }
}
