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
                <h3>Alta Catálogo de cursos</h3>
                <h4>Cordinación de Gestión y Vinculación</h4>
            </div>
            <div class="panel-body">

                <form id="catalogocursoform" class="form-horizontal" method="POST" action="{{ route('catalogo-cursos.store') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('clave_curso') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Clave:</label>

                        <div class="col-md-6">
                            <input id="clave_curso" type="text" class="form-control" name="clave_curso" value="{{ old('clave_curso') }}" >

                            @if ($errors->has('clave_curso'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('clave_curso') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('nombre_curso') ? ' has-error' : '' }}">
                        <label for="nombre_curso" class="col-md-4 control-label">Nombre del curso:</label>

                        <div class="col-md-6">
                            <input id="nombre_curso" type="text" class="form-control" name="nombre_curso" value="{{ old('nombre_curso') }}"  >

                            @if ($errors->has('nombre_curso'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('nombre_curso') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group{{ $errors->has('duracion_curso') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Duracion:</label>

                        <div class="col-md-6">
                            <input id="duracion_curso" type="text" class="form-control" name="duracion_curso" value="{{ old('duracion_curso') }}" >

                            @if ($errors->has('duracion_curso'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('duracion_curso') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('coordinacion_id') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Coordinacion:</label>
                        <div class="col-md-6">
                            <select name="coordinacion_id" form="catalogocursoform">
                                @foreach($coordinaciones as $coordinacion)
                                    <option value="{{ $coordinacion->id }} ">{{ $coordinacion->nombre_coordinacion }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('coordinacion_id'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('coordinacion_id') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('tipo') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Tipo:</label>

                        <div class="col-md-6">
                            <input id="tipo" type="text"  class="form-control" name="tipo" value="{{ old('tipo') }}" >

                            @if ($errors->has('tipo'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('tipo') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('tipo_curso_diploma_instructor') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Tipo Curso-Diploma-Instructor: </label>

                        <div class="col-md-6">
                            <input id="tipo_curso_diploma_instructor" type="text"  class="form-control" name="tipo_curso_diploma_instructor" value="{{ old('tipo_curso_diploma_instructor') }}" >

                            @if ($errors->has('tipo_curso_diploma_instructor'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('tipo_curso_diploma_instructor') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('presentacion') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Presentacion: </label>

                        <div class="col-md-6">
                            <input id="presentacion" type="text"  class="form-control" name="presentacion" value="{{ old('presentacion') }}" >

                            @if ($errors->has('presentacion'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('presentacion') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('tipo_difusion') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Difusion: </label>
                        <div class="col-md-6">
                            <input id="tipo_difusion" type="text"  class="form-control" name="tipo_difusion" value="{{ old('tipo_difusion') }}" >
                        @if ($errors->has('tipo_difusion'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('tipo_difusion') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('dirigido') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Dirigido:</label>

                        <div class="col-md-6">
                            <input id="dirigido" type="text" class="form-control" name="dirigido" value="{{ old('dirigido') }}" >

                            @if ($errors->has('dirigido'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('dirigido') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('objetivo') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Objetivo:</label>

                        <div class="col-md-6">
                            <input id="objetivo" type="text" class="form-control" name="objetivo" value="{{ old('objetivo') }}" >

                            @if ($errors->has('objetivo'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('objetivo') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('contenido') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Contenido:</label>
                        <div class="col-md-6">
                                <input id="contenido" type="text"   class="form-control" name="contenido" value="{{ old('contenido') }}" >
                                @if ($errors->has('contenido'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('contenido') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('sintesis') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Sintesis:</label>

                        <div class="col-md-6">
                            <input id="sintesis" type="text" class="form-control" name="sintesis" value="{{ old('sintesis') }}" >

                            @if ($errors->has('sintesis'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('sintesis') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('metodologia') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label"> Metodologia:</label>

                        <div class="col-md-6">
                            <input id="metodologia" type="text"  class="form-control" name="metodologia" value="{{ old('metodologia') }}" >

                            @if ($errors->has('metodologia'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('metodologia') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('acreditacion') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Acreditacion:</label>

                        <div class="col-md-6">
                            <input id="acreditacion" type="text" class="form-control" name="acreditacion" value="{{ old('acreditacion') }}" >

                            @if ($errors->has('acreditacion'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('acreditacion') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('evaluacion') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Evaluacion:</label>

                        <div class="col-md-6">
                            <input id="acreditacion" type="text" class="form-control" name="evaluacion" value="{{ old('evaluacion') }}" >

                            @if ($errors->has('evaluacion'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('evaluacion') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('bibliografia') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Bibliografia:</label>

                        <div class="col-md-6">
                            <input id="acreditacion" type="text" class="form-control" name="bibliografia" value="{{ old('bibliografia') }}" >

                            @if ($errors->has('bibliografia'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('bibliografia') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('antecedentes') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Antecedentes:</label>

                        <div class="col-md-6">
                            <input id="acreditacion" type="text" class="form-control" name="antecedentes" value="{{ old('antecedentes') }}" >

                            @if ($errors->has('antecedentes'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('antecedentes') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('consecuentes') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Consecuentes:</label>

                        <div class="col-md-6">
                            <input id="acreditacion" type="text" class="form-control" name="consecuentes" value="{{ old('consecuentes') }}" >

                            @if ($errors->has('consecuentes'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('consecuentes') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('fecha_disenio') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Fecha de diseño:</label>

                        <div class="col-md-6">
                            <input id="fecha_disenio" type="date"  class="form-control" name="fecha_disenio" value="{{ old('fecha_disenio') }}" >

                            @if ($errors->has('fecha_disenio'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('fecha_disenio') }}</strong>
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

