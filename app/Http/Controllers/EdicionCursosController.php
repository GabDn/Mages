<?php

namespace App\Http\Controllers;

use App\Coordinacion;
use App\Curso;
use App\EdicionCurso;
use App\Profesor;
use App\Salon;
use Illuminate\Http\Request;

class EdicionCursosController extends Controller
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
        $users = EdicionCurso::all();
        return view("pages.consulta-edicion-cursos")
            ->with("users",$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function nuevo()
    {
        $cursos = Curso::all();
        $profesores = Profesor::all();
        $salones = Salon::all();
        return view("pages.alta-edicion-cursos")
            ->with("cursos",$cursos)
            ->with("profesores",$profesores)
            ->with("salones",$salones);

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
        $user->nombre = $request->nombre;
        $user->tipo_curso_diploma = $request->tipo_curso_diploma;
        $user->tipo = $request->tipo;
        $user->presentación = $request->presentación;
        $user->tipo_difusion = $request->tipo_difusion;
        $user->dirigido_a = $request->dirigido_a;
        $user->objetivo = $request->objetivo;
        $user->contenido = $request->contenido;
        $user->sintesis = $request->sintesis;
        $user->metodologia = $request->metodologia;
        $user->acreditacion = $request->acreditacion;
        $user->cobro = $request->cobro;
        $user->bibliografia = $request->bibliografia;
        $user->antecedentes = $request->antecedentes;
        $user->consecuentes = $request->consecuentes;
        $user->coordinacion_id = $request->coordinacion_id;

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

    public function delete($id)
    {
        $user = Curso::findOrFail($id);
        $user -> delete();
        return redirect('/curso');
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
        $user = new EdicionCurso;
        $user->semestre_imparticion = $request->semestre_imparticion;
        $user->periodo_semestre = $request->periodo_semestre;
        $user->fecha_inicio = $request->fecha_inicio;
        $user->fecha_fin = $request->fecha_fin;
        $user->hora_inicio = $request->hora_inicio;
        $user->hora_fin = $request->hora_fin;
        $user->dia_semana = $request->dias_semana;
        $user->numero_sesiones = $request->numero_sesiones;
        $user->costo = $request->costo;
        $user->orden = $request->orden;
        $user->fecha = $request->fecha;
        $user->cupo_maximo = $request->cupo_maximo;
        $user->cupo_minimo = $request->cupo_minimo;
        $user->status_curso = $request->status_curso;
        $user->profesor_id = $request->profesor_id;
        $user->curso_id = $request->curso_id;
        $user->salon_id = $request->salon_id;



        $user->save();
        /*Session::flash('flash_message', 'Usuario agregado!');*/
        return redirect()->back();
    }

}
