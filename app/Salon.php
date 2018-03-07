<<<<<<< HEAD
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



=======
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



>>>>>>> 069bb25bf9449124930685c80a305e7a0e3bdb73
}