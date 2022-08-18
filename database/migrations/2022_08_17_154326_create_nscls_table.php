<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNsclsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nscls', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string ('titulo', 45);
            $table->string('codigo_nscl', 11);
            $table->string('version', 11);
            $table->date('fecha_publicacion');
            $table->date('fecha_revision');
            $table->date('fecha_aprobacion');
            $table->string('n_aprobacion', 11);
            $table->string('documento', 150);
            $table->string('documento_url',150);
            $table->unsignedBigInteger('mesa_sectorial_id');
            $table->foreign('mesa_sectorial_id')->references('id')->on('mesa_sectorials');
            $table->unsignedBigInteger('estado_producto_id');
            $table->foreign('estado_producto_id')->references('id')->on('estado_productos');
            $table->unsignedBigInteger('centro_formacion_id');
            $table->foreign('centro_formacion_id')->references('id')->on('centro_formacions');
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categorias');
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
        Schema::dropIfExists('nscls');
    }
}
