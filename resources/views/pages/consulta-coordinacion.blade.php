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
                <h3>Coordinaciones</h3>

                {!! Form::open(["route" => "coordinacion.busqueda", "method" => "GET"]) !!}
                <div class="input-group">
                    {!!Form::text("pattern", null, [ "class" => "form-control", "placeholder" => "Buscar Usuario"])!!}
                    {!! Form::select('type', array(
                      'nombre' => 'Por nombre',
                      'rfc' => 'Por RFC',
                      'email' => 'Por e-mail',
                      'telefono' => 'Por núm. telefónico'),
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
                        <th>Abreviatura</th>
                        <th></th>
                    </tr>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->nombre_coordinacion }} </td>
                            <td>{{ $user->abreviatura}}</td>
                            <td><a href="{{ URL::to('coordinacion', $user->id) }}" class="btn btn-info">Detalles</a></td>
                            <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Dar de baja</button></td>
                        </tr>
                    @endforeach

                    <!-- Modal -->
                    <div class="modal fade" id="myModal" role="dialog">
                      <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Eliminar Coordinacion</h4>
                          </div>
                          <div class="modal-body">
                            <p>¿Está seguro de eliminar la coordinacion?</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-normal" data-dismiss="modal" aria-label="Close">Cancelar</button>
                            <a href="{{ URL::to('coordinacion/baja', $user->id) }}" class="btn btn-danger">Dar de baja</a>
                          </div>
                        </div>
                      </div>
                    </div>

                </table>




            </div>

    </section>

@endsection

