<?php

namespace App\Http\Controllers;

use App\Salon;
use Illuminate\Http\Request;

class SalonController extends Controller
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
        $users = Salon::all();
        return view("pages.consulta-salon")
            ->with("users",$users);
    }

     public function nuevo()
    {
        return view("pages.alta-salon");
    }

    public function show($id)
    {
        $user = Salon::find($id);
        return view("pages.ver-salon")
            ->with("user",$user);
    }

    public function edit($id)
    {
        $user = Salon::find($id);
        return view("pages.update-salon")
            ->with("user",$user);
    }

    public function update(Request $request, $id)
    {
        $user = Salon::find($id);
        $user->sede = $request->sede;
        $user->capacidad= $request->capacidad;
        $user->ubicacion= $request->ubicacion;
        $user->sigla = $request->sigla;
        $user->save();
        return view("pages.update-salon")
            ->with("user",$user);
    }

    public function delete($id)
    {
        $user = Salon::findOrFail($id);
        $user -> delete();
        return redirect('/salon');
    }

    public function create(Request $request)
    {
        $user = new Salon;
        $user->sede = $request->sede;
        $user->capacidad= $request->capacidad;
        $user->ubicacion= $request->ubicacion;
        $user->sigla = $request->sigla;
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Salon  $salon
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Salon  $salon
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Salon  $salon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Salon $salon)
    {
        //
    }
}
