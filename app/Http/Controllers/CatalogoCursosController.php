<?php

namespace App\Http\Controllers;

use App\Coordinacion;
use App\Curso;
use App\CatalogoCurso;
use App\Profesor;
use App\Salon;
use Illuminate\Http\Request;

class CatalogoCursosController extends Controller
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
        $coordinaciones = Coordinacion::all();
        $users = CatalogoCurso::all();
        return view("pages.consulta-catalogo-cursos")
            ->with("coordinaciones",$coordinaciones)
            ->with("users",$users);


    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function nuevo()
    {
        $coordinaciones = Coordinacion::all();
       
        return view("pages.alta-catalogo-cursos")
            ->with("coordinaciones",$coordinaciones);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = EdicionCurso::find($id);
        return view("pages.ver-catalogo-cursos")
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
        $user = EdicionCurso::findOrFail($id);
        $user -> delete();
        return redirect('/catalogo-cursos');
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
        $user = new CatalogoCurso;
        $user->nombre_curso = $request->nombre_curso;
        $user->duracion_curso = $request->duracion_curso;
        $user->coordinacion_id = $request->coordinacion_id;
        $user->tipo = $request->tipo;
        $user->tipo_curso_diploma_instructor = $request->tipo_curso_diploma_instructor;
        $user->presentacion = $request->presentacion;
        $user->tipo_difusion = $request->tipo_difusion;
        $user->dirigido = $request->dirigido;
        $user->objetivo = $request->objetivo;
        $user->contenido = $request->contenido;
        $user->sintesis = $request->sintesis;
        $user->metodologia = $request->metodologia;
        $user->acreditacion = $request->acreditacion;
        $user->evaluacion = $request->evaluacion;
        $user->bibliografia = $request->bibliografia;
        $user->antecedentes = $request->antecedentes;
        $user->consecuentes = $request->antecedentes;
        $user->fecha_disenio = $request->fecha_disenio;
        $user->clave_curso = $request->clave_curso;
        

        $user->save();
        /*Session::flash('flash_message', 'Usuario agregado!');*/
        return redirect()->back();
    }

}
