<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipanteCurso extends Migration
{
    /**
     * Es una tabla intermedia para los cursos y los participantes
     */
    public function up()
    {
        Schema::create('participante_curso', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->Integer('curso_id')->unsigned();
            $table->Integer('profesor_id')->unsigned();
            
            $table->foreign('curso_id')->references('id')->on('cursos');
            $table->foreign('profesor_id')->references('id')->on('profesors');

            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExist('participante_curso');
    }
}
