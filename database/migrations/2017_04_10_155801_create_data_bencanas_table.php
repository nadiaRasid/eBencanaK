<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateDataBencanasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_bencanas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jenisBencana');
            $table->string('namaMangsa');
            $table->string('ic');
            $table->string('umur');
            $table->string('bangsa');
            $table->string('alamatMangsa');
            $table->string('phoneMangsa');
            $table->date('tarikh');
            $table->string('status');
            $table->string('namaPusat');
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
        Schema::dropIfExists('data_bencanas');
    }
}
