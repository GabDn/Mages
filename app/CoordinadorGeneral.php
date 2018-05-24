<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class CoordinadorGeneral extends Model
{
    use Notifiable;

    protected $table = "coordinador_general";
    protected $fillable = [
        'clave', 'coordinacion_abrev','coordinacion','coordinador','cargo','comentarios'
    ];
}
