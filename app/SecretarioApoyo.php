<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class SecretarioApoyo extends Model
{
    use Notifiable;
    protected $table = 'secretario_apoyo';
    protected $fillable = [
        'clave', 'secretario_abrev','coordinacion','secretario','cargo','comentarios'
    ];
}
