<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiposActivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipos_activos', function (Blueprint $table) {
            //maquinaria u equipo, equipo de oficina,equipo de computación y comunicación,
            //flota y eqipo de transporte, envases y empaques, otros
            $table->bigIncrements('id');
            $table->string('descripcion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipos_activos');
    }
}
