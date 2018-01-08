<?php

namespace App\Http\Controllers;

use App\Carrera;
use App\Division;
use Illuminate\Http\Request;

class CarreraController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $users = Carrera::all();
        return view("pages.consulta-carrera")
            ->with("users",$users);
    }

    public function nuevo()
    {
        $users = Division::all();

        return view("pages.alta-carrera")->with("users",$users);
    }

    public function show($id)
    {
        $user = Carrera::find($id);
        return view("pages.ver-carrera")
            ->with("user",$user);
    }

    public function edit($id)
    {
        $user = Carrera::find($id);
        return view("pages.update-carrera")
            ->with("user",$user);
    }

    public function update(Request $request, $id)
    {
        $user = Carrera::find($id);
        $user->nombre = $request->nombre;
        $user->clave = $request->clave;
        $user->id_division= $request->id_division;
        $user->save();
        return view("pages.update-carrera")
            ->with("user",$user);
    }


    public function delete($id)
    {
        $user = Carrera::findOrFail($id);
        $user -> delete();
        return redirect('/carrera');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user = new Carrera;
        $user->nombre = $request->nombre;
        $user->clave = $request->clave;
        $user->id_division= $request->id_division;
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
     * @param  \App\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carrera  $carrera
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carrera $carrera)
    {
        //
    }
}
