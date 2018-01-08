<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProfesores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres');
            $table->string('apellido_paterno');
            $table->string('apellido_materno')->nullable();
            $table->string('rfc')->unique();
            $table->string('curp');
                $table->String('fecha_nacimiento');
                $table->string('telefono');
                $table->string('grado');
            $table->string('email');
            $table->string('estudios');
            $table->string('area');
             $table->string('comentarios');
              $table->string('genero');
              $table->string('tutor');
              $table->string('baja')->nullable();
              $table->string('causa_baja')->nullable();
              $table->string('semblanza_corta');
              $table->string('facebook')->nullable();
            $table->boolean('unam');
            $table->string('procedencia')->nullable();

            $table->integer('facultad_id')->unsigned()->nullable();
            $table->integer('carrera_id')->unsigned()->nullable();


            $table->foreign('facultad_id')->references('id')->on('facultads');
            $table->foreign('carrera_id')->references('id')->on('carreras');
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
        Schema::dropIfExists('profesores');
    }
}
