<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{
    protected $table = 'salons';

       /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'sede','capacidad','ubicacion','sigla'
    ];



}