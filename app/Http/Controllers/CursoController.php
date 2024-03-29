<?php

namespace App\Http\Controllers;

use App\CatalogoCurso;
use App\Coordinacion;
use App\Curso;
use App\ParticipantesCurso;
use App\ProfesoresCurso;
use App\Profesor;
use App\Salon;
use App\Http\Controllers\DB;
use Illuminate\Http\Request;

class CursoController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $users = Curso::all();
        return view("pages.consulta-cursos")
            ->with("users",$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function nuevo($id)
    {
        $user = CatalogoCurso::find($id);
        $salones = Salon::all();
        $profesores = Profesor::all();
        return view("pages.alta-curso")
            ->with("salones",$salones)
            ->with("profesores",$profesores)
            ->with("user",$user);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Curso::find($id);
        return view("pages.ver-curso")
            ->with("user",$user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Curso::find($id);
        return view("pages.update-curso")
            ->with("user",$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = Curso::find($id);
        $user->semestre_imparticion = $request->semestre_imparticion;
        $user->catalogo_id = $request->catalogo_id;
        $user->fecha_inicio = $request->fecha_inicio;
        $user->fecha_fin = $request->fecha_fin;
        $user->hora_inicio = $request->hora_inicio;
        $user->hora_fin = $request->hora_fin;
        $user->dias_semana = $request->dias_semana;
        $user->numero_sesiones = $request->numero_sesiones;
        $user->texto_diploma = $request->texto_diploma;
        $user->costo = $request->costo;
        $user->orden = $request->orden;
        $user->fecha_disenio = $request->fecha_disenio;
        $user->cupo_maximo = $request->cupo_maximo;
        $user->cupo_minimo = $request->cupo_minimo;
        $user->status = $request->status;
        $user->profesor_id = $request->profesor_id;
        $user->salon_id = $request->salon_id;

        $user->save();
        return view("pages.update-curso")
            ->with("user",$user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*wut??*/
    public function search(Request $request)
    {
        if($request->type == "nombre")
            {
                $words=explode(" ", $request->pattern);
                foreach($words as $word){
                    $users = Curso::where('nombre','LIKE','%'.$word.'%')
                    -> get();
                }
             return view('display')->with("users",$users);
        }elseif($request->type == "rfc")
        {
                $users = Profesor::where('rfc','LIKE','%'.$request->pattern.'%')
                ->get();
                return view('display')->with("users",$users);
        }elseif($request->type == "email"){
                $users = Profesor::where('email','LIKE','%'.$request->pattern.'%')
                ->get();
                return view('display')->with("users",$users);
        }elseif($request->type == "telefono"){
                $users = Profesor::where('telefono','LIKE','%'.$request->pattern.'%')
                ->get();
                return view('pages.consulta-cursos')->with("users",$users);
        }

    }
    public function Csearch(Request $request){
        #dd($request);
        if ($request->type == "nombre_curso") {
            $catalogos_res = CatalogoCurso::select('id')->where('nombre_curso','ILIKE','%'.$request->pattern.'%')->get();
            $res_busqueda = Curso::whereIn('catalogo_id', $catalogos_res)
                ->get();
            return view('pages.consulta-cursos')->with("users",$res_busqueda);
        }elseif ($request->type=="fechas") {
            $res_busqueda = Curso::where('semestre_imparticion', '=', $request->anio.'-'.$request->Sem.$request->IO)
                ->orWhere('semestre_imparticion', '=', $request->anio.'-'.$request->Sem)
                ->get();
            return view('pages.consulta-cursos')->with("users",$res_busqueda);
        }elseif ($request->type=="titular") {
            $words=explode(" ", $request->pattern);
            foreach($words as $word){
                $profesores = Profesor::select('id')->where('nombres','ILIKE','%'.$word.'%')
                ->orWhere('apellido_paterno','ILIKE','%'.$word.'%')
                ->orWhere('apellido_materno','ILIKE','%'.$word.'%')
                ->get();
            }
            $res_busqueda = Curso::whereIn('profesor_id',$profesores)->get();
            return view('pages.consulta-cursos')->with("users",$res_busqueda);
        }
    }

    public function delete($id)
    {
        try {$user = Curso::findOrFail($id);
                $user -> delete();
                return redirect('/curso');
            }catch (\Illuminate\Database\QueryException $e){
                return redirect()->back()->with('msj', 'El curso no puede ser eliminado porque tiene alumnos inscritos.');
            }
    }

    public function bajaParticipante($id,$curso)
    {
        $user = ParticipantesCurso::where('participante_curso.profesor_id',$id)
            ->where('participante_curso.curso_id',$curso)
            ->delete();
        return redirect()->back();
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //return $request;
        
        $curso = new Curso;
        $profesorCurso = new ProfesoresCurso;

        $curso->semestre_imparticion = $request->semestre_imparticion;
        $curso->fecha_inicio = $request->fecha_inicio;
        $curso->fecha_fin = $request->fecha_fin;
        $curso->hora_inicio = $request->hora_inicio;
        $curso->hora_fin = $request->hora_fin;
        $curso->dias_semana = $request->dias_semana;
        $curso->numero_sesiones = $request->numero_sesiones;
        $curso->texto_diploma = $request->texto_diploma;
        $curso->costo = $request->costo;
        $curso->orden = $request->orden;
        $curso->profesor_id = 1; //Error xd
        $curso->fecha_disenio = $request->fecha_disenio;
        $curso->cupo_maximo = $request->cupo_maximo;
        $curso->cupo_minimo = $request->cupo_minimo;
        $curso->status = $request->status;
        $curso->catalogo_id = $request->catalogo_id;
        $curso->salon_id = $request->salon_id;

        $curso->save();

        //Determinar el id del curso que se acaba de inscribir
        $newCurso = Curso::where('salon_id',$request->salon_id)
        ->where('catalogo_id',$request->catalogo_id)
        ->where('fecha_inicio',$request->fecha_inicio)
        ->where('fecha_fin',$request->fecha_fin)
        ->where('semestre_imparticion',$request->semestre_imparticion)
        ->get();

        //return $newCurso;
        
        foreach($request->profesor_id as $profesor_id){
            $profesorCurso = new ProfesoresCurso;
            $profesorCurso->curso_id = $newCurso[0]["id"];
            $profesorCurso->profesor_id = $profesor_id;
            $profesorCurso->save();
        }

        /*Session::flash('flash_message', 'Usuario agregado!');*/
        return redirect()->back();
    }
    public function inscripcionParticipante($id)
    {
        
        $count = ParticipantesCurso::select('id')
            ->where('curso_id',$id)
            ->count();

        $cupo = Curso::findOrFail($id)->cupo_maximo;

        $users = Profesor::select('*')
            ->whereNotIn('rfc',Profesor::join('participante_curso','participante_curso.profesor_id','profesors.id')
                ->where('participante_curso.curso_id',$id)
                ->select('profesors.rfc')->get())
            ->get();
        $nombre_curso = CatalogoCurso::findOrFail($id)->nombre_curso;


        $curso_id = $id;
        return view("pages.curso-inscripcion")
            ->with("users",$users)
            ->with("curso_id",$curso_id)
            ->with("count",$count)
            ->with("cupo",$cupo)
            ->with("nombre_curso", $nombre_curso);
    }
    
    public function GenerarFormatos($id)
    {
        $users = Profesor::leftJoin('participante_curso','profesors.id','=','participante_curso.profesor_id')
            ->where('participante_curso.curso_id',$id)
            ->select('profesors.*')->get();

        $curso = Curso::findOrFail($id);

        return view("pages.curso-generarformatos")
            ->with("users",$users)
            ->with("curso",$curso);
    }
    
    public function verParticipante($id)
    {

        $users = Profesor::leftJoin('participante_curso','profesors.id','=','participante_curso.profesor_id')
            ->where('participante_curso.curso_id',$id)
            ->select('profesors.*')->get();

        $curso = Curso::findOrFail($id);

        return view("pages.curso-ver-profesores")
            ->with("users",$users)
            ->with("curso",$curso);
    }

    public function registrarParticipante(Request $request){
        $count = ParticipantesCurso::select('id')
            ->where('curso_id',$request->curso_id)
            ->count();
//Queda pendiente el registro
        $cupo = Curso::findOrFail($request->curso_id)->cupo_maximo;
        if($count < $cupo){

            $user = new ParticipantesCurso;
            $user->curso_id = $request->curso_id;
            $user->profesor_id = $request->id;
            $user->save();
            return redirect()->route("curso.inscripcion",$request->curso_id);

        }else{
            return redirect()->route("curso.inscripcion",$request->curso_id);
        }

    }
}
