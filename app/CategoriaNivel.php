<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaNivel extends Model
{
    protected $table = "categoria_nivel";
    protected $fillable = [
        'categoria', 'abreviatura'
    ];

}
