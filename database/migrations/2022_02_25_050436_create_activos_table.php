<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('referencia',255);
            $table->integer('costo');
            $table->dateTime('fecha_ingreso');
            $table->dateTime('fecha_compra');
            $table->string('codigo_qr',255);
            $table->unsignedBigInteger('lugar');
            $table->unsignedBigInteger('marca');
            $table->unsignedBigInteger('tipo');
            $table->foreign('lugar')->references('id')->on('lugares')->onDelete('cascade');
            $table->foreign('marca')->references('id')->on('marcas')->onDelete('cascade');
            $table->foreign('tipo')->references('id')->on('tipos_activos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activos');
    }
}
