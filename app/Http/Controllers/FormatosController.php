<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Curso;
use App\CatalogoCurso;
use App\Profesor;
use App\Coordinacion;
use Carbon\Carbon;
use  App\Salon;
class FormatosController extends Controller
{

    
    public function sendPDF($id,$tipoDeConstancia){
        $curso = Curso::findOrFail($id);
        $cursoCatalogo = CatalogoCurso::findOrFail($curso->catalogo_id);
        $coordinacion=Coordinacion::findOrFail($cursoCatalogo->coordinacion_id);
        $profesor = Profesor::findOrFail($curso->profesor_id);
        $salon=Salon::findOrFail($curso->salon_id);
        $fecha = Carbon::now();
        $fecha = $fecha->format('d-m-Y'); 

        if ($tipoDeConstancia == "A"){
            $pdf = PDF::loadView('pages.pdf.hojainscripcion', array('curso' => $curso,'profesor'=>$profesor,'cursoCatalogo' => $cursoCatalogo,'coordinacion'=>$coordinacion,'fecha'=>$fecha,'salon'=>$salon))->setPaper('a4', 'landscape');
            //return $coordinacion;
            return $pdf->download('Hoja inscripcion.pdf'); 
        } 
    }
}