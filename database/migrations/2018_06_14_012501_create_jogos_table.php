<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJogosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jogos', function (Blueprint $table) {
            $table->increments('jogos_id');
            $table->string('jogos_nome');
            $table->date('jogos_data');
            $table->integer('grupos_id')->unsigned();
            $table->integer('jogos_selecao_vencedora_id');
            $table->integer('jogos_pontuacao_selecao1');
            $table->integer('jogos_pontuacao_selecao2');
            $table->integer('selecaos_id1')->unsigned();
            $table->integer('selecaos_id2')->unsigned();
        });

        Schema::table('jogos', function($table) {
            $table->foreign('grupos_id')->references('grupos_id')->on('grupos');
            $table->foreign('selecaos_id1')->references('selecaos_id')->on('selecaos');
            $table->foreign('selecaos_id2')->references('selecaos_id')->on('selecaos');
        });
     
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jogos');
    }
}
