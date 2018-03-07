<!-- Guardado en resources/views/pages/admin.blade.php -->

@extends('layouts.principal')

@section('numero_sesiones')
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
                <h3>Alta edición de cursos</h3>
                <h4>Cordinación de Gestión y Vinculación</h4>
            </div>
            <div class="panel-body">

                <form id="cursoform" class="form-horizontal" method="POST" action="{{ route('curso.store') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('semestre_imparticion') ? ' has-error' : '' }}">
                        <label for="semestre_imparticion" class="col-md-4 control-label">Semestre </label>

                        <div class="col-md-6">
                            <input id="semestre_imparticion" type="text" class="form-control" name="semestre_imparticion" value="{{ old('semestre_imparticion') }}"  >

                            @if ($errors->has('semestre_imparticion'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('semestre_imparticion') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('periodo_semestre') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Periodo</label>

                        <div class="col-md-6">
                            <input id="periodo_semestre" type="text" class="form-control" name="periodo_semestre" value="{{ old('periodo_semestre') }}" >

                            @if ($errors->has('periodo_semestre'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('periodo_semestre') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('fecha_inico') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Fecha de inicio</label>

                        <div class="col-md-6">
                            <input id="fecha_inico" type="text" class="form-control" name="fecha_inico" value="{{ old('fecha_inico') }}" >

                            @if ($errors->has('fecha_inico'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('fecha_inico') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('fecha_fin') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Difusion: </label>

                        <div class="col-md-6">
                            <input id="fecha_fin" type="text" class="form-control" name="fecha_fin" value="{{ old('fecha_fin') }}" >

                            @if ($errors->has('fecha_fin'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('fecha_fin') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('dias_semana') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Dias a la semana</label>

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
                        <label for="name" class="col-md-4 control-label">Numero de sesiones</label>

                        <div class="col-md-6">
                            <input id="numero_sesiones" type="text" class="form-control" name="numero_sesiones" value="{{ old('numero_sesiones') }}" >

                            @if ($errors->has('numero_sesiones'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('numero_sesiones') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('costo') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Costo</label>

                        <div class="col-md-6">
                            <input id="costo" type="text" class="form-control" name="costo" value="{{ old('costo') }}" >

                            @if ($errors->has('costo'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('costo') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('orden') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Orden</label>

                        <div class="col-md-6">
                            <input id="orden" type="text" class="form-control" name="orden" value="{{ old('orden') }}" >

                            @if ($errors->has('orden'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('orden') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('fecha') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Fecha</label>

                        <div class="col-md-6">
                            <input id="fecha" type="text" class="form-control" name="fecha" value="{{ old('fecha') }}" >

                            @if ($errors->has('fecha'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('fecha') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('cupo_maximo') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Cupo maximo</label>

                        <div class="col-md-6">
                            <input id="cupo_maximo" type="text" class="form-control" name="cupo_maximo" value="{{ old('cupo_maximo') }}" >

                            @if ($errors->has('cupo_maximo'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('cupo_maximo') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('cupo_minimo') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Cupo minimo</label>

                        <div class="col-md-6">
                            <input id="cupo_minimo" type="text" class="form-control" name="cupo_minimo" value="{{ old('cupo_minimo') }}" >

                            @if ($errors->has('cupo_minimo'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('cupo_minimo') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('status_curso') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Estado del curso</label>

                        <div class="col-md-6">
                            <input id="status_curso" type="text" class="form-control" name="status_curso" value="{{ old('status_curso') }}" >

                            @if ($errors->has('status_curso'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('status_curso') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('bibliografia') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Semblanza Corta</label>

                        <div class="col-md-6">
                            <input id="bibliografia" type="text" class="form-control" name="bibliografia" value="{{ old('bibliografia') }}" >

                            @if ($errors->has('bibliografia'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('bibliografia') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('antecedentes') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">antecedentes</label>

                        <div class="col-md-6">
                            <input id="antecedentes" type="text" class="form-control" name="antecedentes" value="{{ old('antecedentes') }}" >

                            @if ($errors->has('antecedentes'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('antecedentes') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group{{ $errors->has('consecuentes') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">consecuentes</label>

                        <div class="col-md-6">
                            <input id="consecuentes" type="text" class="form-control" name="consecuentes" value="{{ old('consecuentes') }}" >

                            @if ($errors->has('consecuentes'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('consecuentes') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('curso_id') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Curso</label>

                        <div class="col-md-6">
                            <select name="curso_id" form="cursoform">
                                @foreach($cursos as $curso)

                                    <option value="{{ $curso->id }} "> {{ $curso->nombre }} </option>

                                @endforeach
                            </select>
                            @if ($errors->has('curso_id'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('cursos_id') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('profesor_id') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Profesor</label>

                        <div class="col-md-6">
                            <select name="profesor_id" form="cursoform">
                                @foreach($profesores as $profesor)

                                    <option value="{{ $profesor->id }} "> {{ $profesor->nombres }} </option>

                                @endforeach
                            </select>
                            @if ($errors->has('profesor_id'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('profesor_id') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('salon_id') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Salon</label>

                        <div class="col-md-6">
                            <select name="profesor_id" form="cursoform">
                                @foreach($salones as $salon)

                                    <option value="{{ $salon->id }} "> {{ $salon->sede }} </option>

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

