<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaTribunal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tribunal', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nivelacademico', 10);
            $table->unsignedBigInteger('docente_id');
            $table->foreign('docente_id', 'fk_docentetribunal_docente')->references('id')->on('docente')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('tribunal');
    }
}
