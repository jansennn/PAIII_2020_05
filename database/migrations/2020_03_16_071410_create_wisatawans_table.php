<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWisatawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('wisatawans', function (Blueprint $table) {
            $table->bigIncrements('id');
	        $table->unsignedBigInteger('user_id');
            $table->string('jenis_kelamin');
            $table->string('no_hp');
            $table->string('email');
            $table->string('alamat');
            $table->timestamps();

	    $table->foreign('user_id')->references('id')->on('users');	
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wisatawans');
    }
}
