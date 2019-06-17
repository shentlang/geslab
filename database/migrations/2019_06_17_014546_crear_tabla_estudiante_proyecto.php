<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaEstudianteProyecto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiante_proyecto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('estudiante_id');
            $table->foreign('estudiante_id', 'fk_estudiante_proyecto_estudiante')->references('id')->on('estudiante')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('proyecto_id');
            $table->foreign('proyecto_id', 'fk_estudiante_proyecto_proyecto')->references('id')->on('proyecto')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('estudiante_proyecto');
    }
}
