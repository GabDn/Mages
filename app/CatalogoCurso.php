<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class CatalogoCurso extends Model
{
protected $table = 'catalogo_cursos';

/**
* The attributes that are mass assignable.
*
* @var array
*/
protected $fillable = [
'nombre_curso','duracion_curso','coordinacion_id','tipo','tipo_curso_diploma_instructor','presentacion',
'tipo_difusion','dirigido','objetivo','contenido','sintesis','metodologia','acreditacion','evaluacion',
'bibliografia','antecedentes','consecuentes','fecha_disenio','clave_curso'
];

    public function getCoordinacion(){
        $coordinacion = Coordinacion::findOrFail($this->coordinacion_id)->nombre_coordinacion;
        return $coordinacion;
    }
    public function nombreCoordinacion($nombre){
        $coordinacion = Coordinacion::findOrFail($this->$nombre)->id;
        return $coordinacion;
    }

    public function todasCoordinacion(){
        $coordinacion = Coordinacion::all(['nombre_coordinacion'])->toArray();
        return $coordinacion;
    }


}
