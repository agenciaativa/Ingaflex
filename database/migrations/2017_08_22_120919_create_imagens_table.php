<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galeriaimagens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('file');
            $table->integer('gal_id')->unsigned();
            $table->foreign('id')->references('id')->on('galeria');
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
        Schema::drop('galeriaimagens');
    }
}
