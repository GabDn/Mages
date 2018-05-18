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
                    <h3>Lista de salones</h3>
                      
 {!! Form::open(["route" => "salon.busqueda", "method" => "GET"]) !!}
  <div class="input-group">
      {!!Form::text("pattern", null, [ "class" => "form-control", "placeholder" => "Buscar Usuario"])!!}
      {!! Form::select('type', array(
        'nombre' => 'Por sede', 
        'rfc' => 'Por capacidad', 
        'email' => 'Por ubicacion',
        'telefono' => 'Por sigla'), 
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
                            <th>Sede</th>
                            <th>Capacidad</th>
                            <th>Ubicación</th>
                        </tr>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->sede }} </td>
                                <td>{{ $user->capacidad}}</td>
                                <td>{{ $user->ubicacion}}</td>
                                <td><a href="{{ URL::to('salon', $user->id) }}" class="btn btn-info">Detalles</a>
                                    <a href="{{ URL::to('salon/baja', $user->id) }}" class="btn btn-danger">Dar de baja</a></td>
                            </tr>
                        @endforeach
                    </table>

                
      

      </div>

     </section>
     
@endsection