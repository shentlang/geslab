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
            $table->unsignedBigInteger('docentes_id');
            $table->foreign('docentes_id', 'fk_docentestribunal_docentes')->references('id')->on('docentes')->onDelete('restrict')->onUpdate('restrict');
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
