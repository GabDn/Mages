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
                <h3>Alta Salon</h3>
            </div>
            <div class="panel-body">



                <form id="cursoform" class="form-horizontal" method="POST" action="{{ route('salon.store') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('sede') ? ' has-error' : '' }}">
                        <label for="sede" class="col-md-4 control-label">Sede: </label>

                        <div class="col-md-6">
                            <input id="sede" type="text" class="form-control" name="sede" value="{{ old('sede') }}"  >

                            @if ($errors->has('sede'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('sede') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('capacidad') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Capacidad</label>

                        <div class="col-md-6">
                            <input id="capacidad" type="text" class="form-control" name="capacidad" value="{{ old('capacidad') }}" >

                            @if ($errors->has('capacidad'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('capacidad') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('unicacion') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Ubicación</label>

                        <div class="col-md-6">
                            <input id="ubicacion" type="text" class="form-control" name="ubicacion" value="{{ old('ubicacion') }}" >

                            @if ($errors->has('ubicacion'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('ubicacion') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group{{ $errors->has('sigla') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Sigla</label>

                        <div class="col-md-6">
                            <input id="sigla" type="text" class="form-control" name="sigla" value="{{ old('sigla') }}" >

                            @if ($errors->has('sigla'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('sigla') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Crear Salon
                            </button>
                        </div>
                    </div>
                </form>
            </div>

    </section>

@endsection