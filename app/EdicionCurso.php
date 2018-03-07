<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EdicionCurso extends Model
{
    protected $table = 'edicion_cursos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'semestre_imparticion','periodo_semestre','fecha_inicio','fecha_fin','hora_inicio','hora_fin',
        'dias_semana','numero_sersiones','costo','orden','fecha','cupo_maximo','cupo_minimo','status_curso',
        'profesor_id','curso_id','salon_id'
    ];



}
