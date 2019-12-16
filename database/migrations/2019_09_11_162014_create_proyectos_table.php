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
            $table->text('nombreproyecto');
            $table->date('fechadefensa')->nullable();
            $table->time('hora')->nullable();
            $table->string('estado')->default('Pendiente');
            $table->unsignedBigInteger('lugar_id')->default(1);
            $table->foreign('lugar_id')->references('id')->on('lugars')->onDelete('cascade');
            $table->unsignedBigInteger('materia_id');
            $table->foreign('materia_id')->references('id')->on('materias')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('decano_id');
            $table->foreign('decano_id')->references('id')->on('decanos')->onDelete('cascade');
            $table->unsignedBigInteger('pretribunal_id');
            $table->foreign('pretribunal_id')->references('id')->on('pretribunals')->onDelete('cascade');
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
