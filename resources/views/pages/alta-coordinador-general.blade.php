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
                <h3>Alta Coordinador General</h3>
                <h4>Cordinación de Gestión y Vinculación</h4>
            </div>
            <div class="panel-body">
                <form id="cursoform" class="form-horizontal" method="POST" action="{{ route('coordinador-general.store') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('clave') ? ' has-error' : '' }}">
                        <label for="clave" class="col-md-4 control-label">Clave: </label>
                        <div class="col-md-6">
                            <input id="clave" type="text" class="form-control" name="clave" value="{{ old('clave') }}"  >
                            @if ($errors->has('clave'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('clave') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('coordinacion_abrev') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Coordinacion abreviada:</label>
                        <div class="col-md-6">
                            <input id="coordinacion_abrev" type="text" class="form-control" name="coordinacion_abrev" value="{{ old('coordinacion_abrev') }}" >

                            @if ($errors->has('coordinacion_abrev'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('coordinacion_abrev') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('coordinacion') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Coordinacion:</label>

                        <div class="col-md-6">
                            <input id="coordinacion" type="text" class="form-control" name="coordinacion" value="{{ old('coordinacion') }}" >

                            @if ($errors->has('coordinacion'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('coordinacion') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('coordinador') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Coordinador:</label>

                        <div class="col-md-6">
                            <input id="coordinador" type="text" class="form-control" name="coordinador" value="{{ old('coordinador') }}" >

                            @if ($errors->has('coordinador'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('coordinador') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('cargo') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Cargo:</label>

                        <div class="col-md-6">
                            <input id="cargo" type="text" class="form-control" name="cargo" value="{{ old('cargo') }}" >
                            @if ($errors->has('cargo'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('cargo') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('comentarios') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Comentario:</label>

                        <div class="col-md-6">
                            <input id="comentarios" type="text" class="form-control" name="comentarios" value="{{ old('comentarios') }}" >

                            @if ($errors->has('comentarios'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('comentarios') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Crear Coordinador
                            </button>
                        </div>
                    </div>
                </form>
            </div>

    </section>

@endsection