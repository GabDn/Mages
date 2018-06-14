<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSecretariaApoyo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secretario_apoyo', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->String('clave');
            $table->String('coordinacion_abrev');
            $table->String('coordinacion');
            $table->String('secretario');
            $table->String('cargo');
            $table->String('comentarios')->nullable();
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
        //
    }
}
