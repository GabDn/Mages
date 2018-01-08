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
                    <h3>Alta Facultad</h3>
                    <h4>Cordinación de Gestión y Vinculación</h4>
                </div>
                <div class="panel-body">



                    <form id="cursoform" class="form-horizontal" method="POST" action="{{ route('facultad.store') }}">
                        {{ csrf_field() }}



                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                            <label for="nombre" class="col-md-4 control-label">Nombre de la facultad </label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}"  >

                                @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Crear Coordinación
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

        </section>

@endsection