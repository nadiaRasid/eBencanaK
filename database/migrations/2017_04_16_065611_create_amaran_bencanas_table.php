<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmaranBencanasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amaran_bencanas', function (Blueprint $table) {
          $table->increments('id');
          $table->string('tajuk');
          $table->string('sumber');
          $table->string('berita');
          $table->date('tarikhLaporan');
          $table->date('tarikhKemaskini');
          $table->boolean("is_published")->default(false);

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
        Schema::dropIfExists('amaran_bencanas');
    }
}
