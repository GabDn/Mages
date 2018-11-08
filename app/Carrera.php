<?php
/**
 * Created by PhpStorm.
 * User: gmeono
 * Date: 10/12/17
 * Time: 02:12 PM
 */

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Carrera extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = "carreras";
    protected $fillable = [
        'nombre','clave','id_division'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];
}
