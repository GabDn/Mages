<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Curso;
use App\CatalogoCurso;
use App\ProfesoresCurso;
use App\ParticipantesCurso;
use App\Profesor;
use Carbon\Carbon;
class ConstanciasController extends Controller
{
    public function selectType()
    {
        $cursosCatalogo = CatalogoCurso::all();
        $cursos = Curso::all();
        return view("pages.constancias-elegirTipoConstancia")
                ->with('cursosCatalogo',$cursosCatalogo)
                ->with('cursos',$cursos);
    }
    public function generar(Request $request)
    {
        //return $request;

        //retorna el número de profesores que imparten el curso
        $count = ProfesoresCurso::select('id')
        ->where('curso_id',$request->id)
        ->count();
        $tipoDeConstancia = $request->type;
        $curso = Curso::findOrFail($request->id);
        $cursoCatalogo = CatalogoCurso::findOrFail($curso->catalogo_id);
        $profesores = ProfesoresCurso::where('curso_id',$request->id)->get();
        $participantes = ParticipantesCurso::where('curso_id',$request->id)->get();        
        $fecha = Carbon::now();
        $fecha = $fecha->format('d-m-Y');         
        if ($tipoDeConstancia == "A"){
        // El tipo de constancia es instructores y Coordinador
            if($count == 1){
            //La constancia es para cuando sólo hay un instructor
              foreach($participantes as $participante){
                $profesor = Profesor::findOrFail($participante->profesor_id);
                $pdf = PDF::loadView('pages.pdf.consinstructor', array('curso' => $curso,'profesor'=>$profesor,'cursoCatalogo' => $cursoCatalogo,'fecha'=>$fecha))->setPaper('a4', 'landscape');
                $pdf->download('a' . $profesor->nombres . '.pdf'); 
              }
              
            }if($count == 1){
                //La constancia es para cuando sólo hay un instructor
                $pdf = PDF::loadView('pages.pdf.consinstructor', array('curso' => $curso,'profesores'=>$profesores,'cursoCatalogo' => $cursoCatalogo,'fecha'=>$fecha))->setPaper('a4', 'landscape');
                return $pdf->download('Un instructor.pdf'); 
            }
        
        }elseif ($tipoDeConstancia == "B")
        {
            $pdf = PDF::loadView('pages.pdf.consdosinstructor', array('curso' => $curso,'profesor'=>$profesor,'cursoCatalogo' => $cursoCatalogo,'fecha'=>$fecha))->setPaper('a4', 'landscape');
            return $pdf->download('Dos instructores.pdf');
        }elseif ($tipoDeConstancia == "C")
        {
            $pdf = PDF::loadView('pages.pdf.constresinstructor', array('curso' => $curso,'profesor'=>$profesor,'cursoCatalogo' => $cursoCatalogo,'fecha'=>$fecha))->setPaper('a4', 'landscape');
            return $pdf->download('Tres instructores.pdf');
        }elseif ($tipoDeConstancia == "D")
        {
            $pdf = PDF::loadView('pages.pdf.consuninstructor', array('curso' => $curso,'profesor'=>$profesor,'cursoCatalogo' => $cursoCatalogo,'fecha'=>$fecha))->setPaper('a4', 'landscape');
            return $pdf->download('Un instructor.pdf');
        }
    }
    
    /*public function pdf(){
        $cursillos = CatalogoCurso::all();
        $cursosCatalogo = array();
        foreach ($cursillos as $cursillo) {
            $cursosCatalogo[$cursillo->nombre_curso] = $cursillo->nombre_curso;
        }
        return view('pages.constancias')->with('cursosCatalogo',$cursosCatalogo);
    }

    public function generatePDF(Request $request){
        $request->semestre;   
        $cursoCatalogo = CatalogoCurso::where('nombre_curso', 'LIKE', '%'.$request->curso.'%')->get();
        $cursos = Curso::where('catalogo_id', $cursoCatalogo[0]->id)
               ->where('semestre_imparticion',(int) $request->semestre)
                ->get();
                 
        return view('pages.constancias-elegirCurso')->with('cursos',$cursos)->with('tipoConstancia',$request->tipoConstancia);
    }
    
    public function sendPDF($id,$tipoDeConstancia){
        $curso = Curso::findOrFail($id);
        $cursoCatalogo = CatalogoCurso::findOrFail($curso->catalogo_id);
        $profesor = Profesor::findOrFail($curso->profesor_id);
        
        $fecha = Carbon::now();
        $fecha = $fecha->format('d-m-Y'); 

        if ($tipoDeConstancia == "A"){
            $pdf = PDF::loadView('pages.pdf.consinstructor', array('curso' => $curso,'profesor'=>$profesor,'cursoCatalogo' => $cursoCatalogo,'fecha'=>$fecha))->setPaper('a4', 'landscape');
            return $pdf->download('Un instructor.pdf'); 
        } elseif ($tipoDeConstancia == "B")
        {
            $pdf = PDF::loadView('pages.pdf.consdosinstructor', array('curso' => $curso,'profesor'=>$profesor,'cursoCatalogo' => $cursoCatalogo,'fecha'=>$fecha))->setPaper('a4', 'landscape');
            return $pdf->download('Dos instructores.pdf');
        }elseif ($tipoDeConstancia == "C")
        {
            $pdf = PDF::loadView('pages.pdf.constresinstructor', array('curso' => $curso,'profesor'=>$profesor,'cursoCatalogo' => $cursoCatalogo,'fecha'=>$fecha))->setPaper('a4', 'landscape');
            return $pdf->download('Tres instructores.pdf');
        }elseif ($tipoDeConstancia == "AA")
        {
            $pdf = PDF::loadView('pages.pdf.consuninstructor', array('curso' => $curso,'profesor'=>$profesor,'cursoCatalogo' => $cursoCatalogo,'fecha'=>$fecha))->setPaper('a4', 'landscape');
            return $pdf->download('Un instructor.pdf');
        }elseif ($tipoDeConstancia == "BB")
        {
            $pdf = PDF::loadView('pages.pdf.consdosinstructores', array('curso' => $curso,'profesor'=>$profesor,'cursoCatalogo' => $cursoCatalogo,'fecha'=>$fecha))->setPaper('a4', 'landscape');
            return $pdf->download('Dos instructores.pdf');
        }elseif ($tipoDeConstancia == "CC")
        {
            $pdf = PDF::loadView('pages.pdf.constresinstructor', array('curso' => $curso,'profesor'=>$profesor,'cursoCatalogo' => $cursoCatalogo,'fecha'=>$fecha))->setPaper('a4', 'landscape');
            return $pdf->download('Tres instructores.pdf');
        }elseif ($tipoDeConstancia == "U")
        {
            $pdf = PDF::loadView('pages.pdf.unica', array('curso' => $curso,'profesor'=>$profesor,'cursoCatalogo' => $cursoCatalogo,'fecha'=>$fecha))->setPaper('a4', 'landscape');
            return $pdf->download('UNICA.pdf');
        }elseif ($tipoDeConstancia == "AAA")
        {
            $pdf = PDF::loadView('pages.pdf.instructorsad', array('curso' => $curso,'profesor'=>$profesor,'cursoCatalogo' => $cursoCatalogo,'fecha'=>$fecha))->setPaper('a4', 'landscape');
            return $pdf->download('SAD y un instructor.pdf');
        }elseif ($tipoDeConstancia == "BBB")
        {
            $pdf = PDF::loadView('pages.pdf.dosinstructoressad', array('curso' => $curso,'profesor'=>$profesor,'cursoCatalogo' => $cursoCatalogo,'fecha'=>$fecha))->setPaper('a4', 'landscape');
            return $pdf->download('SAD y dos instructores.pdf');
        }elseif ($tipoDeConstancia == "D")
        {
            $pdf = PDF::loadView('pages.pdf.saddirector', array('curso' => $curso,'profesor'=>$profesor,'cursoCatalogo' => $cursoCatalogo,'fecha'=>$fecha))->setPaper('a4', 'landscape');
            return $pdf->download('SAD y Director.pdf');
        }elseif ($tipoDeConstancia == "E")
        {
            $pdf = PDF::loadView('pages.pdf.coordgeneral', array('curso' => $curso,'profesor'=>$profesor,'cursoCatalogo' => $cursoCatalogo,'fecha'=>$fecha))->setPaper('a4', 'landscape');
            return $pdf->download('Coordinación General.pdf');
        }elseif ($tipoDeConstancia == "EE")
        {
            $pdf = PDF::loadView('pages.pdf.coordgeneral2', array('curso' => $curso,'profesor'=>$profesor,'cursoCatalogo' => $cursoCatalogo,'fecha'=>$fecha))->setPaper('a4', 'landscape');
            return $pdf->download('Coordinador y Coordinación General.pdf');
        }elseif ($tipoDeConstancia == "EEE")
        {
            $pdf = PDF::loadView('pages.pdf.coordgeneralsad', array('curso' => $curso,'profesor'=>$profesor,'cursoCatalogo' => $cursoCatalogo,'fecha'=>$fecha))->setPaper('a4', 'landscape');
            return $pdf->download('Coordinación General y SAD.pdf');
        }elseif ($tipoDeConstancia == "SDI")
        {
            $pdf = PDF::loadView('pages.pdf.directorsadimpartir', array('curso' => $curso,'profesor'=>$profesor,'cursoCatalogo' => $cursoCatalogo,'fecha'=>$fecha))->setPaper('a4', 'landscape');
            return $pdf->download('SAD y Director.pdf');
        }elseif ($tipoDeConstancia == "SDC")
        {
            $pdf = PDF::loadView('pages.pdf.directorsadcoordinar', array('curso' => $curso,'profesor'=>$profesor,'cursoCatalogo' => $cursoCatalogo,'fecha'=>$fecha))->setPaper('a4', 'landscape');
            return $pdf->download('SAD y Director.pdf');
        }elseif ($tipoDeConstancia == "DI")
        {
            $pdf = PDF::loadView('pages.pdf.directortextoimpartir', array('curso' => $curso,'profesor'=>$profesor,'cursoCatalogo' => $cursoCatalogo,'fecha'=>$fecha))->setPaper('a4', 'landscape');
            return $pdf->download('Director Texto.pdf');
        }elseif ($tipoDeConstancia == "DC")
        {
            $pdf = PDF::loadView('pages.pdf.directortextocoordinar', array('curso' => $curso,'profesor'=>$profesor,'cursoCatalogo' => $cursoCatalogo,'fecha'=>$fecha))->setPaper('a4', 'landscape');
            return $pdf->download('Director Texto.pdf');
        }

    }*/
}
