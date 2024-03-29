<?php

namespace App\Http\Controllers;

use App\Coordinacion;
use App\Curso;
use App\CatalogoCurso;
use App\Profesor;
use App\Http\Controllers\DB;
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
        $user = CatalogoCurso::find($id);
        return view("pages.ver-catalogo-cursos")
            ->with("user",$user);
    }


    public function edit($id)
    {
        $user = CatalogoCurso::find($id);
        $coordinaciones = Coordinacion::all(['id','nombre_coordinacion']);
        
        return view("pages.update-catalogo-cursos")
            ->with("user",$user)->with("coordinaciones",$coordinaciones);
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
        $user = CatalogoCurso::find($id);
        $user->nombre_curso = $request->nombre_curso;
        $user->duracion_curso = $request->duracion_curso;
        $user->coordinacion_id = $request->coordinacion_id;
        //$user->coordinacion_id = $user->coordinacionID($request->coordinacion_id);
        //$coord_nom = DB::table('coordinacions')->where('id','=',$user->coordinacion_id)->value('nombre_coordinacion');
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
        
        return view("pages.update-catalogo-cursos")
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
                $users = CatalogoCurso::where('nombre_curso','LIKE','%'.$word.'%')
                    -> get();
            }
            return view("pages.consulta-catalogo-cursos")
            ->with("users",$users);

        $coordinaciones = Coordinacion::all();
        $users = CatalogoCurso::all();
        return view("pages.consulta-catalogo-cursos")
            ->with("coordinaciones",$coordinaciones)
            ->with("users",$users);

         }elseif($request->type == "clave"){

            $words=explode(" ", $request->pattern);
            foreach($words as $word){
                $users = CatalogoCurso::where('clave_curso','LIKE','%'.$word.'%')
                    -> get();
            }
            return view("pages.consulta-catalogo-cursos")
            ->with("users",$users);
        }/*
        elseif($request->type == "coordinacion"){

            $words=explode(" ", $request->pattern);
            foreach($words as $word){
                $users = CatalogoCurso::where('coordinacion','LIKE','%'.$word.'%')
                    -> get();
            }
            return view("pages.consulta-catalogo-cursos")
            ->with("users",$users);
        }*/

        $coordinaciones = Coordinacion::all();
        $users = CatalogoCurso::all();
        return view("pages.consulta-catalogo-cursos")
            ->with("coordinaciones",$coordinaciones)
            ->with("users",$users);
    }

    public function delete($id)
    {
        $user = CatalogoCurso::findOrFail($id);
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
