<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiantesProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes__proyectos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('estudiantes_id');
            $table->foreign('estudiantes_id', 'fk_estudiantes_proyectos_estudiantes')->references('id')->on('estudiantes')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('proyectos_id');
            $table->foreign('proyectos_id', 'fk_estudiantes_proyectos_proyectos')->references('id')->on('proyectos')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('estudiantes__proyectos');
    }
}
