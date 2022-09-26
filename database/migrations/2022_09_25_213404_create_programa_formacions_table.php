<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramaFormacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programa_formacions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('denominacion_prog', 45);
            $table->string('codigo_prog', 45);
            $table->date('fech_ini_prog');
            $table->date('fech_fin_prog');
            $table->integer('eta_electiva',);
            $table->integer('eta_productiva',);
            $table->integer('eta_total',);
            $table->unsignedBigInteger('tipo_programa_id');
            $table->foreign('tipo_programa_id')->references('id')->on('tipo_programas');
            $table->unsignedBigInteger('campo_ocupacional_id');
            $table->foreign('campo_ocupacional_id')->references('id')->on('campo_ocupacionals');
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
        Schema::dropIfExists('programa_formacions');
    }
}
