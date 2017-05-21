<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKawasanBencanasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kawasan_bencanas', function (Blueprint $table) {
          $table->increments('id');
          $table->string('namaKawasan');
          $table->string('jenisBencana');
          $table->date('tarikhBerlaku');
          $table->string('punca');
          $table->integer('noPindah');
          $table->integer('noKorban');
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
        Schema::dropIfExists('kawasan_bencanas');
    }
}
