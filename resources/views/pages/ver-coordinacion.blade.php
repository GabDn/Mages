

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
                    <h1>{{ $user->abreviatura }} </h1>
                </div>
                <div class="panel-body">

                    <div class="row">
                        <div class="row">
                            <div class="row col-md-12 ">
                                <div class="form-group col-md-4">
                                    {!!Form::label("nombre", "Nombre")!!}
                                    {!!Form::text("nombre", $user->nombre_coordinacion, [ "class" => "form-control", "placeholder" => "Nombre", "required","disabled"])!!}
                                </div>

                                <div class="form-group col-md-4">
                                    {!!Form::label("coordinador", "Coordinador")!!}
                                    {!!Form::text("coordinador", $user->coordinador, [ "class" => "form-control", "placeholder" => "Coordinador", "required","disabled"])!!}
                                </div>

                                <div class="form-group col-md-4">
                                    {!!Form::label("abreviatura", "Abreviatura")!!}
                                    {!!Form::text("abreviatura", $user->abreviatura, [ "class" => "form-control", "placeholder" => "Abreviatura", "required","disabled"])!!}
                                </div>

                                <div class="form-group col-md-6">
                                    {!!Form::label("comentarios", "Comentarios")!!}
                                    {!!Form::text("comentarios", $user->comentarios, [ "class" => "form-control", "placeholder" => "comentarios", "required","disabled"])!!}
                                </div>

                            </div>

                            <td><a href="{{ URL::to('coordinacion/actualizar', $user->id) }}" class="btn btn-info">Actualiza información</a>
                                <a href="{{ URL::to('coordinacion/baja', $user->id) }}" class="btn btn-danger">Dar de baja</a></td>

                        </div>



                    </div>

        </section>

@endsection

