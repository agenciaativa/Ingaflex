<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFraseprodutoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fraseproduto', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo_oquefazemos');
            $table->text('frase_oquefazemos');
            $table->string('titulo_rotulos');
            $table->text('frase_rotulos');
            $table->string('titulo_suprimentos');
            $table->text('frase_suprimentos');
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
        Schema::drop('fraseproduto');
    }
}
