<?php

namespace App\Http\Controllers;

use App\Coordinacion;
use Illuminate\Http\Request;

class CoordinacionController extends Controller
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
        $users = Coordinacion::all();
        return view("pages.consulta-coordinacion")
            ->with("users",$users);
    }

    public function nuevo()
    {
        return view("pages.alta-coordinacion");
    }

    public function show($id)
    {
        $user = Coordinacion::find($id);
        return view("pages.ver-coordinacion")
            ->with("user",$user);
    }

    public function edit($id)
    {
        $user = Coordinacion::find($id);
        return view("pages.update-coordinacion")
            ->with("user",$user);
    }

    public function update(Request $request, $id)
    {
        $user = Coordinacion::find($id);
        $user->nombre_coordinacion = $request->nombre_coordinacion;
        $user->abreviatura= $request->abreviatura;
        $user->coordinador= $request->coordinador;
        $user->comentarios = $request->comentarios;
        $user->save();
        return view("pages.update-coordinacion")
            ->with("user",$user);
    }


    public function delete($id)
    {
        $user = Coordinacion::findOrFail($id);
        $user -> delete();
        return redirect('/coordinacion');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user = new Coordinacion;
        $user->nombre_coordinacion = $request->nombre_coordinacion;
        $user->abreviatura= $request->abreviatura;
        $user->coordinador= $request->coordinador;
        $user->comentarios = $request->comentarios;
        $user->save();
        /*Session::flash('flash_message', 'Usuario agregado!');*/
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Coordinacion  $coordinacion
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Coordinacion  $coordinacion
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Coordinacion  $coordinacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coordinacion $coordinacion)
    {
        //
    }
}
