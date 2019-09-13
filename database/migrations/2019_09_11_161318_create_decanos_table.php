<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDecanosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('decanos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('personas_id');
            $table->foreign('personas_id', 'fk_personasdecano_personas')->references('id')->on('personas')->onDelete('restrict')->onUpdate('restrict');
            $table->date('gestion');
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
        Schema::dropIfExists('decanos');
    }
}
