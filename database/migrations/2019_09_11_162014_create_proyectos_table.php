<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombreproyecto', 50);
            $table->string('tipo', 30);
            $table->date('defensaini');
            $table->date('defensafinal');
            $table->unsignedBigInteger('tribunals_id');
            $table->foreign('tribunals_id', 'fk_tribunals_proyectos')->references('id')->on('tribunals')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('tutors_id');
            $table->foreign('tutors_id', 'fk_tutors_proyectos')->references('id')->on('tutors')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('proyectos');
    }
}
