<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Profesor extends Authenticatable 
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = "profesors";
    protected $fillable = [
        'nombres', 'apellido_paterno','apellido_materno','rfc','curp','fecha_nacimiento','telefono','grado','email','usuario', 'fecha_alta','estudios','grado','area','comentarios','genero','tutor','baja','causa_baja','semblanza_corta','facebook','unam','procedencia','facultad_id','carrera_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function scopeName($query, $name){
        $query->where('nombres','LIKE',"%$name%");
    }
}
