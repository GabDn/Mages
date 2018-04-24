<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre','semestre_imparticion','fecha_inicio','fecha_fin','hora_inicio','hora_fin','dias_semana',
        'numero_sesiones','texto_diploma','profesor_id','costo','orden','fecha_disenio','cupo_maximo',
        'cupo_minimo','status','catalogo_id','salon_id'
    ];
    public function getSalon(){
        $salon = Salon::findOrFail($this->salon_id)->sede;
        return $salon;
    }
    public function getProfesor(){
        $nombre = Profesor::findOrFail($this->profesor_id)->nombres;
        $ap_pat = Profesor::findOrFail($this->profesor_id)->apellido_paterno;
        $ap_mat = Profesor::findOrFail($this->profesor_id)->apellido_materno;

        return $nombre." ".$ap_pat." ".$ap_mat;
    }
    
    public function getIdProfesor(){
        return  $this->profesor_id;
    }
    
    public function getIdSalon(){
        
        return $this->salon_id;
    }
    public function allProfesor(){
        $coordinacion = Profesor::all();
        return $coordinacion;
    }
    public function allSalon(){
        $coordinacion = Salon::all();
        return $coordinacion;
    }

}
