<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNsclhasprogramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nsclhasprogramas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('nscl_id');
            $table->foreign('nscl_id')->references('id')->on('nscls');
            $table->unsignedBigInteger('programa_id');
            $table->foreign('programa_id')->references('id')->on('programa_formacions');
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
        Schema::dropIfExists('nsclhasprogramas');
    }
}
