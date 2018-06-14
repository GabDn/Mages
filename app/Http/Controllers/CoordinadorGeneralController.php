<?php

namespace App\Http\Controllers;

use App\CoordinadorGeneral;
use Illuminate\Http\Request;

class CoordinadorGeneralController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $user = CoordinadorGeneral::all()->last();
        if($user == null){
            $user = new CoordinadorGeneral();
            $user->clave = '';
            $user->coordinacion_abrev = '';
            $user->coordinacion = '';
            $user->coordinador = '';
            $user->cargo = '';
            $user->comentarios = '';

            return view("pages.consulta-coordinador-general")
                ->with("user",$user);
        }else{
            return view("pages.consulta-coordinador-general")
                ->with("user",$user);
        }

    }

    public function nuevo()
    {
        return view("pages.alta-coordinador-general");
    }

    public function edit($id)
    {
        $user = CoordinadorGeneral::find($id);
        return view("pages.update-coordinador-general")
            ->with("user",$user);
    }

    public function update(Request $request, $id)
    {
        $user = CoordinadorGeneral::find($id);
        $user->clave = $request->clave;
        $user->coordinacion_abrev = $request->coordinacion_abrev;
        $user->coordinacion = $request->coordinacion;
        $user->coordinador = $request->coordinador;
        $user->cargo = $request->cargo;
        $user->comentarios = $request->comentarios;
        $user->save();
        return redirect('/coordinador-general');

    }

    public function delete($id)
    {
        $user = CoordinadorGeneral::findOrFail($id);
        $user -> delete();
        return redirect('/coordinador-general');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user = new CoordinadorGeneral();
        $user->clave = $request->clave;
        $user->coordinacion_abrev = $request->coordinacion_abrev;
        $user->coordinacion = $request->coordinacion;
        $user->coordinador = $request->coordinador;
        $user->cargo = $request->cargo;
        $user->comentarios = $request->comentarios;
        $user->save();
        /*Session::flash('flash_message', 'Usuario agregado!');*/
        $users = CoordinadorGeneral::all();
        $user = $users->last();
        return view("pages.consulta-coordinador-general")
            ->with("user",$user);
    }


}
