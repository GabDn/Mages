<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre','tipo_curso_diploma','tipo','presentacion','tipo_difusion','dirigido_a','objetivo','contenido','sintesis','metodologia','acreditacion','cobro','bibliografia','antecedentes','consecuentes','coordinacion_id'
    ];



}
