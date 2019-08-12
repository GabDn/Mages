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
                <h2>{{$nombre_curso}}</h2>
                <h3>Lista de profesores</h3>
                <h3>Cupo maximo: {{$count}}/{{$cupo}}</h3>
                {!! Form::open(["route" => ["profesor.consulta1", $curso_id], "method" => "POST"]) !!}
                <div class="input-group">
                    {!!Form::text("pattern", null, [ "class" => "form-control", "placeholder" => "Buscar Profesor"])!!}
                    {!! Form::select('type', array(
                      'nombre' => 'Por nombre',
                      'correo' => 'Por correo',
                      'rfc' => 'Por RFC'),
                      null,['class' => 'btn dropdown-toggle pull-left'] ) !!}
                    {!!Form::hidden('count',$count)!!}
                    {!!Form::hidden('cupo',$cupo)!!}
                    {!!Form::hidden('nombre_curso',$nombre_curso)!!}
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
                    {!! Form::open(array('class' => 'form-horizontal', 'role' =>'form', 'route'=> ['curso.registrar', $user->id,$curso_id] ,'files' => true, 'method' => 'POST' )) !!}
                        <tr>
                            <td>{{ $user->nombres }} {{ $user->apellido_paterno }} {{ $user->apellido_materno }}</td>
                            <td>{{ $user->email}}</td>
                            <td>{{ $user->rfc}}</td>
                            <td>
                                <button class="btn btn-success" type="submit">Dar de Alta</button>
                            </td>
                        </tr>
                    {!! Form::close() !!}
                    @endforeach
                </table>
            </div>
    </section>
@endsection
