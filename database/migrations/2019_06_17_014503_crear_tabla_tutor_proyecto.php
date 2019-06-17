<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaTutorProyecto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutor_proyecto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tutor_id');
            $table->foreign('tutor_id', 'fk_tutor_proyecto_tutor')->references('id')->on('tutor')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('proyecto_id');
            $table->foreign('proyecto_id', 'fk_tutor_proyecto_proyecto')->references('id')->on('proyecto')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('tutor_proyecto');
    }
}
