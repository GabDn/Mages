<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEdicionCurso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edicion_cursos', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('semestre_imparticion');
            $table->string('periodo_semestre');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->String('dias_semana')->nullable();
            $table->integer('numero_sesiones');
            $table->integer('costo')->nullable();
            $table->string('orden')->nullable();
            $table->string('fecha')->nullable();
            $table->integer('cupo_maximo');
            $table->integer('cupo_minimo');
            $table->String('status_curso');
            $table->integer('profesor_id')->unsigned();
            $table->integer('curso_id')->unsigned();
            $table->integer('salon_id')->unsigned();

            $table->foreign('profesor_id')->references('id')->on('profesors');
            $table->foreign('curso_id')->references('id')->on('cursos');
            $table->foreign('salon_id')->references('id')->on('salons');

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
        Schema::dropIfExists('edicion_cursos');
    }
}
