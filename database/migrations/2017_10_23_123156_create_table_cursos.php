<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCursos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->increments('id')->unique();
             $table->string('nombre');
            $table->string('tipo_curso_diploma');
            $table->string('tipo');
            $table->string('presentación');
            $table->String('tipo_difusion');
            $table->string('dirigido_a');
            $table->string('objetivo');
            $table->string('contenido')->nullable();
            $table->string('sintesis')->nullable();
            $table->string('metodologia');
             $table->string('acreditacion');
              $table->string('cobro');
              $table->string('bibliografia');
              $table->string('antecedentes');
              $table->string('consecuentes')->nullable();
               $table->integer('coordinacion_id')->unsigned();

    $table->foreign('coordinacion_id')->references('id')->on('coordinacions');
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
        Schema::dropIfExists('cursos');
    }
}
