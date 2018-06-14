<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSelecaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selecaos', function (Blueprint $table) {
            $table->increments('selecaos_id');
            $table->string('selecaos_nome');
            $table->integer('grupos_id')->unsigned();
            // $table->foreign('grupos_id')->references('grupos_id')->on('grupos');
            
        });

        Schema::table('selecaos', function($table) {
            $table->foreign('grupos_id')->references('grupos_id')->on('grupos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('selecaos');
    }
}
