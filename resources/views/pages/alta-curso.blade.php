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
    </div>ugjgkkbnbbbb
    <section class="content-inner">
    <br>
      <div class="panel panel-default">
                <div class="panel-heading">

                    <h3>Alta Curso para catálogo</h3>
                    <h4>{{$user->nombre_curso}}</h4>
                </div>
        </div>
                <div class="panel-body">
                    <form id="cursoform" class="form-horizontal" method="POST" action="{{ route('curso.store') }}">
                        {{ csrf_field() }}


                         <div class="form-group{{ $errors->has('semestre_imparticion') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Semestre:</label>

                            <div class="col-md-6">
                                <input id="semestre_imparticion" type="text" class="form-control" name="semestre_imparticion" value="{{ old('semestre_imparticion') }}" >

                                @if ($errors->has('semestre_imparticion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('semestre_imparticion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('fecha_inicio') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Fecha de inicio:</label>

                            <div class="col-md-6">
                                <input id="fecha_inicio" type="date" class="form-control" name="fecha_inicio" value="{{ old('fecha_inicio') }}" >

                                @if ($errors->has('fecha_inicio'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fecha_inicio') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('fecha_fin') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Fecha de fin: </label>

                            <div class="col-md-6">
                                <input id="fecha_fin" type="date" class="form-control" name="fecha_fin" value="{{ old('fecha_fin') }}" >

                                @if ($errors->has('fecha_fin'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fecha_fin') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('hora_inicio') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Hora de inicio:</label>

                            <div class="col-md-6">
                                <input id="hora_inicio" type="text" class="form-control" name="hora_inicio" value="{{ old('hora_inicio') }}" >

                                @if ($errors->has('hora_inicio'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('hora_inicio') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('hora_fin') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Hora de fin:</label>

                            <div class="col-md-6">
                                <input id="hora_fin" type="text" class="form-control" name="hora_fin" value="{{ old('hora_fin') }}" >

                                @if ($errors->has('hora_fin'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('hora_fin') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('dias_semana') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Dias a la semana:</label>

                            <div class="col-md-6">
                                <input id="dias_semana" type="text" class="form-control" name="dias_semana" value="{{ old('dias_semana') }}" >

                                @if ($errors->has('dias_semana'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dias_semana') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('numero_sesiones') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Numero de sesiones:</label>

                            <div class="col-md-6">
                                <input id="numero_sesiones" type="numbrer" min="1" class="form-control" name="numero_sesiones" value="{{ old('numero_sesiones') }}" >

                                @if ($errors->has('numero_sesiones'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('numero_sesiones') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('texto_diploma') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Dirigido a:</label>

                            <div class="col-md-6">
                                <input id="texto_diploma" type="text" class="form-control" name="texto_diploma" value="{{ old('texto_diploma') }}" >

                                @if ($errors->has('texto_diploma'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('texto_diploma') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('profesor_id') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Profesor:</label>

                            <div class="col-md-6">
                                <select name="profesor_id" form="cursoform">
                                    @foreach($profesores as $profesor)

                                        <option value="{{ $profesor->id }} ">{{ $profesor->nombres }} {{ $profesor->apellido_paterno }} {{ $profesor->apellido_materno }}</option>

                                    @endforeach
                                </select>
                                @if ($errors->has('profesor_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('profesor_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('costo') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Costo</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input id="costo" type="number" min="1" class="form-control" name="costo" step='0.01' value="{{ old('costo') }}" >
                                </div>
                                @if ($errors->has('costo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('costo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('orden') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Orden:</label>

                            <div class="col-md-6">
                                <input id="orden" type="text" class="form-control" name="orden" value="{{ old('orden') }}" >

                                @if ($errors->has('orden'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('orden') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('fecha_disenio') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Fecha diseño:</label>

                            <div class="col-md-6">
                                <input id="fecha_disenio" type="date" class="form-control" name="fecha_disenio" value="{{ old('fecha_disenio') }}" >

                                @if ($errors->has('fecha_disenio'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fecha_disenio') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('cupo_maximo') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Cupo maximo:</label>
                            <div class="col-md-6">
                                <input id="cupo_maximo" type="number" min =1 class="form-control" name="cupo_maximo" value="{{ old('cupo_maximo') }}" >

                                @if ($errors->has('cupo_maximo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cupo_maximo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('cupo_minimo') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Cupo minimo:</label>

                            <div class="col-md-6">
                                <input id="cupo_minimo" type="number" min="1" class="form-control" name="cupo_minimo" value="{{ old('cupo_minimo') }}" >

                                @if ($errors->has('cupo_minimo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cupo_minimo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Estado del curso</label>
                            <div class="col-md-6">
                                <select name="status"  form="cursoform">
                                    <option value="Activo">Activo </option>
                                    <option value="Inactivo">Inactivo </option>
                                </select>
                                @if ($errors->has('status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <input id="catalogo_id" type="hidden" class="form-control" name="catalogo_id" value="{{ $user->id}}" >

                        <div class="form-group{{ $errors->has('salon_id') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Salon:</label>

                            <div class="col-md-6">
                                <select name="salon_id" form="cursoform">
                                @foreach($salones as $salon)

                                    <option value="{{ $salon->id }} "> {{ $salon->sede}} </option>

                                @endforeach
                                </select>
                                @if ($errors->has('salon_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('salon_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Crear
                                </button>
                            </div>
                            
                        </div>
                    </form>
      </div>

     </section>
     
@endsection
  
