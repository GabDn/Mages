<?php

namespace App\Http\Controllers;

use App\Carrera;
use App\Facultad;
use App\Profesor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ProfesorController extends Controller
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


    public function index(Request $request)
    {
        $users = Profesor::name($request->get('pattern'));
        return view("pages.consulta-profesores")
            ->with("users",$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function nuevo()
    {

        $facultades = Facultad::all();
        $carreras = Carrera::all();
        return view("pages.alta-profesor")->with("facultades",$facultades)->with("carreras",$carreras);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Profesor::find($id);
        return view("pages.ver-profesor")
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
        $user = Profesor::find($id);
        return view("pages.update-profesor")
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
        $user = Profesor::find($id);
         $user->nombres = $request->nombres;
        $user->apellido_paterno = $request->apellido_paterno;
        $user->apellido_materno = $request->apellido_materno;
        $user->rfc = $request->rfc;
        $user->telefono = $request->telefono;
        $user->curp = $request->curp;
        $user->fecha_nacimiento = $request->fecha_nacimiento;
        $user->telefono = $request->telefono;
        $user->grado = $request->grado;

        $user->estudios = $request->estudios;
        $user->area = $request->area;
        $user->comentarios = $request->comentarios;
        $user->genero = $request->genero;
        $user->tutor = $request->tutor;
        $user->semblanza_corta = $request->semblanza_corta;
        $user->facebook = $request->facebook;
        $user ->unam = $request -> unam;

        if($user->unam ==true){
            $user->procedencia = null;

            if($user->facultad_id!==1){
                $user->carrera_id=null;
            }
        }else{
            $user->procedencia = $request->procedencia;
        }
        if($user->email !== $request->email)
            {
                $user->email = $request->email;
            }

        $user->save();
        return view("pages.update-profesor")
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
                    $users = Profesor::where('nombre','LIKE',"%$word%")
                    ->orWhere('ap_pat','LIKE',"%$word%")
                    ->orWhere('ap_mat','LIKE',"%$word%")
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
                return view('display')->with("users",$users);
        }

    }

    public function delete($id)
    {
        $user = Profesor::findOrFail($id);
        $user -> delete();
        return redirect('/profesor');
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
        $user = new Profesor;
        $user->nombres = $request->nombres;
        $user->apellido_paterno = $request->apellido_paterno;
        $user->apellido_materno = $request->apellido_materno;
        $user->rfc = $request->rfc;
        $user->telefono = $request->telefono;
        $user->curp = $request->curp;
        $user->fecha_nacimiento = $request->fecha_nacimiento;
        $user->telefono = $request->telefono;
        $user->grado = $request->grado;
        $user->email = $request->email;
        $user->estudios = $request->estudios;
        $user->area = $request->area;
        $user->comentarios = $request->comentarios;
        $user->genero = $request->genero;
        $user->tutor = $request->tutor;
        $user->semblanza_corta = $request->semblanza_corta;
        $user->facebook = $request->facebook;
        $user ->unam = $request -> unam;
        $user->procedencia = $request->procedencia;
        $user->facultad_id = $request ->facultad_id;
        $user->carrera_id = $request ->carrera_id;



        $user->save();
        /*Session::flash('flash_message', 'Usuario agregado!');*/
        return redirect()->back();
    }

}
