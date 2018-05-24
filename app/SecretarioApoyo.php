<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SecretarioApoyo extends Model
{
    use Notifiable;
    protected $fillable = [
        'clave', 'coordinacion_abrev','coordinacion','coordinador','cargo','comentarios'
    ];
}
