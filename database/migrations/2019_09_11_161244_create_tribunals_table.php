<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTribunalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tribunals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rol', 10);
            $table->unsignedBigInteger('personas_id');
            $table->foreign('personas_id', 'fk_personas_tribunals')->references('id')->on('personas')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('tribunals');
    }
}
