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
                <h3>Lista de profesores</h3>
                <h3>Cupo maximo: {{$count}}/{{$cupo}}</h3>
                {!! Form::open(["route" => "profesor.consulta", "method" => "GET"]) !!}
                <div class="input-group">
                    {!!Form::text("pattern", null, [ "class" => "form-control", "placeholder" => "Buscar Profesor"])!!}
                    {!! Form::select('type', array(
                      'nombre' => 'Por nombre',
                      'correo' => 'Por correo',
                      'rfc' => 'Por RFC'),
                      null,['class' => 'btn dropdown-toggle pull-left'] ) !!}
                    {!! Form::close() !!}
                    <span class="input-group-btn col-md-2">
                         <button class="btn btn-search " type="submit">Buscar</button>
                    </span>
                </div>
            </div>
            <div class="panel-body">

                <table class="col-md-12">
                    <tr>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>RFC</th>
                    </tr>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->nombres }} {{ $user->apellido_paterno }} {{ $user->apellido_materno }}</td>
                            <td>{{ $user->email}}</td>
                            <td>{{ $user->rfc}}</td>
                            <td>
                                <a href="{{ URL::to('curso/registrar', [$user->id,$curso_id]) }}" class="btn btn-success">Dar de Alta</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
    </section>
@endsection
