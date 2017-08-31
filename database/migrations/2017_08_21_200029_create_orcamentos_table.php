<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrcamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orcamento', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipoServico');
            $table->string('formato');
            $table->string('subtrato');
            $table->string('quantidade');
            $table->string('cores');
            $table->string('laminacao');
            $table->string('acabamento');
            $table->string('largura');
            $table->string('comprimento');
            $table->string('empresa');
            $table->string('nome');
            $table->string('email');
            $table->string('telefone');
            $table->string('cidade');
            $table->string('uf');
            $table->text('mensagem');
            $table->string('anexo');
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
        Schema::drop('orcamento');
    }
}
