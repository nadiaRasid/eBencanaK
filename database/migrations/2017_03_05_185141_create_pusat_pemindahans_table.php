<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePusatPemindahansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pusat_pemindahans', function (Blueprint $table) {
          $table->increments('id');
          $table->string('jenisBencana');
          $table->string('namaPusat');
          $table->string('namaKawasan');
          $table->string('noTelPusat');
          $table->date('tarikhBuka');
          $table->date('tarikhTutup');
          $table->integer('user_id')->unsigned();;
          $table->timestamps();

    //foreign key
    $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pusat_pemindahans');
    }
}
