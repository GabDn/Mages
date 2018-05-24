<?php

namespace App\Http\Controllers;

use App\Categoria_nivel;
use App\CategoriaNivel;
use Illuminate\Http\Request;

class CategoriaNivelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $users = CategoriaNivel::all();
        return view("pages.consulta-categoria-nivel")
            ->with("users",$users);
    }

    public function nuevo()
    {
        return view("pages.alta-categoria-nivel");
    }
    

    public function edit($id)
    {
        $user = CategoriaNivel::find($id);
        return view("pages.update-categoria-nivel")
            ->with("user",$user);
    }

    public function update(Request $request, $id)
    {
        $user = CategoriaNivel::find($id);
        $user->categoria = $request->categoria;
        $user->abreviatura = $request->abreviatura;
        $user->save();
        return redirect('/categoria-nivel');

    }


    public function delete($id)
    {
        $user = CategoriaNivel::findOrFail($id);
        $user -> delete();
        return redirect('/categoria-nivel');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user = new CategoriaNivel();
        $user->categoria = $request->categoria;
        $user->abreviatura = $request->abreviatura;
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


}
