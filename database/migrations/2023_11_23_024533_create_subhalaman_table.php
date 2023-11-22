<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubhalamanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subhalaman', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_halaman')->unsigned();
            $table->string('foto');
            $table->string('judul');
            $table->longText('content');
            $table->string('slug')->unique();
            $table->integer('user_id')->unsigned()->index()->comment('author of the post');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('subhalaman');
    }
}
