<!-- Guardado en resources/views/pages/admin.blade.php -->

@extends('layouts.principal')

@section('contenido')
        <!--Body content-->

<div class="content">
    <div class="top-bar">
        <a href="#menu" class="side-menu-link burger">
            <span class='burger_inside' id='bgrOne'></span>
            <span class='burger_inside' id='bgrTwo'></span>
            <span class='burger_inside' id='bgrThree'></span>
        </a>
    </div>
    <section class="content-inner">
        <br>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>{{ $user->nombre_coordinacion }}</h1>
            </div>
            <div class="panel-body">

                <div class="row">
                    <div class="row col-md-12 ">{!! Form::open(['route' => array('coordinacion.actualizar', $user->id), "method" => "PUT"]) !!}

                        <div class="form-group col-md-4">
                            {!!Form::label("nombre", "Nombre de coordinacion")!!}
                            {!!Form::text("nombre", $user->nombre_coordinacion, [ "class" => "form-control", "placeholder" => "Nombre", "required",""])!!}
                        </div>
                        <div class="form-group col-md-4">
                            {!!Form::label("abreviatura", "Abreviatura")!!}
                            {!!Form::text("abreviatura", $user->abreviatura, [ "class" => "form-control", "placeholder" => "Abreviatura", "required",""])!!}
                        </div>
                        <div class="form-group col-md-4">
                            {!!Form::label("coordinador", "Coordinador")!!}
                            {!!Form::text("coordinador", $user->coordinador, [ "class" => "form-control", "placeholder" => "Coordinador", "required",""])!!}
                        </div>
                        <div class="form-group col-md-4">
                            {!!Form::label("comentarios", "Comentario")!!}
                            {!!Form::text("comentarios", $user->comentarios, [ "class" => "form-control", "placeholder" => "Comentario", "required",""])!!}
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary col-md-offset-1">Actualizar</button>
                        </div>
                        {!! Form::close() !!}
                    </div>



                </div>

    </section>

@endsection

