<?php

namespace App\Http\Controllers;

use App\SecretarioApoyo;
use Illuminate\Http\Request;

class SecretarioApoyoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $user = SecretarioApoyo::all()->last();
        if($user == null){
            $user = new SecretarioApoyo();
            $user->clave = '';
            $user->coordinacion_abrev = '';
            $user->coordinacion = '';
            $user->coordinador = '';
            $user->cargo = '';
            $user->comentarios = '';

            return view("pages.consulta-secretario-apoyo")
                ->with("user",$user);
        }else{
            return view("pages.consulta-secretario-apoyo")
                ->with("user",$user);
        }
    }

    public function nuevo()
    {
        return view("pages.alta-secretario-apoyo");
    }

    public function edit($id)
    {
        $user = SecretarioApoyo::find($id);
        return view("pages.update-secretario-apoyo")
            ->with("user",$user);
    }

    public function update(Request $request, $id)
    {
        $user = SecretarioApoyo::find($id);
        $user->clave = $request->clave;
        $user->coordinacion_abrev = $request->coordinacion_abrev;
        $user->coordinacion = $request->coordinacion;
        $user->secretario = $request->secretario;
        $user->cargo = $request->cargo;
        $user->comentarios = $request->comentarios;
        $user->save();
        return redirect('/secretario-apoyo');

    }

    public function delete($id)
    {
        $user = SecretarioApoyo::findOrFail($id);
        $user -> delete();
        return redirect('/secretario-apoyo');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user = new SecretarioApoyo();
        $user->clave = $request->clave;
        $user->coordinacion_abrev = $request->coordinacion_abrev;
        $user->coordinacion = $request->coordinacion;
        $user->secretario = $request->secretario;
        $user->cargo = $request->cargo;
        $user->comentarios = $request->comentarios;
        $user->save();
        /*Session::flash('flash_message', 'Usuario agregado!');*/
        $users = SecretarioApoyo::all();
        $user = $users->last();
        return view("pages.consulta-secretario-apoyo")
            ->with("user",$user);
    }

}
