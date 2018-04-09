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
                <h3>Alta de profesor</h3>
                <h4>Cordinación de Gestión y Vinculación</h4>
            </div>
        </div>
        <div class="panel-body">



            <form class="form-horizontal" method="POST" action="{{ route('profesor.store') }}">
                {{ csrf_field() }}



                <div class="form-group{{ $errors->has('nombres') ? ' has-error' : '' }}">
                    <label for="nombres" class="col-md-4 control-label">Nombre</label>

                    <div class="col-md-6">
                        <input id="nombres" type="text" class="form-control" name="nombres" value="{{ old('nombres') }}"  >

                        @if ($errors->has('nombres'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('nombres') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('apellido_paterno') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Apellido Paterno</label>

                    <div class="col-md-6">
                        <input id="apellido_paterno" type="text" class="form-control" name="apellido_paterno" value="{{ old('apellido_paterno') }}" >

                        @if ($errors->has('apellido_paterno'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('apellido_paterno') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('apellido_materno') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Apellido Materno</label>

                    <div class="col-md-6">
                        <input id="apellido_materno" type="text" class="form-control" name="apellido_materno" value="{{ old('apellido_materno') }}" >

                        @if ($errors->has('apellido_materno'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('apellido_materno') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('rfc') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">RFC</label>

                    <div class="col-md-6">
                        <input id="rfc" type="text" class="form-control" name="rfc" value="{{ old('rfc') }}" >

                        @if ($errors->has('rfc'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('rfc') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('curp') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">CURP</label>

                    <div class="col-md-6">
                        <input id="curp" type="text" class="form-control" name="curp" value="{{ old('curp') }}" >

                        @if ($errors->has('curp'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('curp') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('fecha_nacimiento') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Fecha de nacimiento</label>

                    <div class="col-md-6">
                        <input id="fecha_nacimiento" type="date" class="form-control" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" >

                        @if ($errors->has('fecha_nacimiento'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('fecha_nacimiento') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Telefono</label>

                    <div class="col-md-6">
                        <input id="telefono" type="text" class="form-control" name="telefono" value="{{ old('telefono') }}" >

                        @if ($errors->has('telefono'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('grado') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Grado</label>

                    <div class="col-md-6">
                        <input id="grado" type="text" class="form-control" name="grado" value="{{ old('grado') }}" >

                        @if ($errors->has('grado'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('grado') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>



                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">E-Mail</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>


                <div class="form-group{{ $errors->has('estudios') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Estudios</label>

                    <div class="col-md-6">
                        <input id="estudios" type="text" class="form-control" name="estudios" value="{{ old('estudios') }}" >

                        @if ($errors->has('estudios'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('estudios') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>


                <div class="form-group{{ $errors->has('area') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Area</label>

                    <div class="col-md-6">
                        <input id="area" type="text" class="form-control" name="area" value="{{ old('area') }}" >

                        @if ($errors->has('area'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('area') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>


                <div class="form-group{{ $errors->has('genero') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Genero</label>

                    <div class="col-md-6">
                        Femenino: <input id="tutor" type="radio" class="" name="genero" value="femenino" >
                        Masculino: <input id="tutor" type="radio" class="" name="genero" value="masculino" >

                        @if ($errors->has('genero'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('genero') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>


                <div class="form-group{{ $errors->has('tutor') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Tutor</label>

                    <div class="col-md-6">
                        Si: <input id="tutor" type="radio" class="" name="tutor" value="true" >
                        No: <input id="tutor" type="radio" class="" name="tutor" value="false" >

                        @if ($errors->has('tutor'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('tutor') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>



                <div class="form-group{{ $errors->has('semblanza_corta') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Semblanza Corta</label>

                    <div class="col-md-6">
                        <input id="semblanza_corta" type="text" class="form-control" name="semblanza_corta" value="{{ old('semblanza_corta') }}" >

                        @if ($errors->has('semblanza_corta'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('semblanza_corta') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>


                <div class="form-group{{ $errors->has('facebook') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Facebook</label>

                    <div class="col-md-6">
                        <input id="facebook" type="text" class="form-control" name="facebook" value="{{ old('facebook') }}" >

                        @if ($errors->has('facebook'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('facebook') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>


                <div class="form-group{{ $errors->has('comentarios') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Comentarios</label>

                    <div class="col-md-6">
                        <input id="comentarios" type="text" class="form-control" name="comentarios" value="{{ old('comentarios') }}" >

                        @if ($errors->has('comentarios'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('comentarios') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('unam') ? ' has-error' : '' }}">
                    <label for="unam" class="col-md-4 control-label">Profesor de la UNAM </label>

                    <div class="col-md-6">
                        Si: <input  onclick="interno()" id="unam" type="radio" class="" name="unam" value="true" >
                        No:  <input id="unam" onclick="externo()"   type="radio" class="" name="unam" value="false" >

                        @if ($errors->has('unam'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('unam') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>



                <div style="display:none;" id="externo" class="form-group{{ $errors->has('procedencia') ? ' has-error' : '' }}">
                    <label for="procedencia" class="col-md-4 control-label">Procedencia</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control" name="procedencia" value="{{ old('procedencia') }}" >

                        @if ($errors->has('procedencia'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('procedencia') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div style="display:none;" id="facultad" class="form-group{{ $errors->has('facultad_id') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Facultad</label>

                    <div class="col-md-6">
                        <select name="facultad_id" form="cursoform">
                            <option onclick="fi()" value="1"> Facultad de Ingeniería</option>


                            @foreach($facultades as $user)

                                @if($user->id!==1)

                                    <option onclick="nofi()" value="{{ $user->id }} "> {{ $user->nombre }} </option>
                                @endif
                            @endforeach
                        </select>





                        @if ($errors->has('facultad_id'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('facultad_id') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div id="carreras" style="display:none;" class="form-group{{ $errors->has('carrera_id') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Carrera</label>

                    <div class="col-md-6">
                        <select name="carrera_id" form="cursoform">
                            @foreach($carreras as $carrera)

                                <option value="{{ $carrera->id }} "> {{ $carrera->nombre }} </option>

                            @endforeach
                        </select>


                        -


                        @if ($errors->has('carrera_id'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('carrera_id') }}</strong>
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

    </section>

    <script>
        function externo() {
            document.getElementById("externo").style.display = "initial";
            document.getElementById("facultad").style.display = "none";
            document.getElementById("carrera").style.display = "none";
        }
        function interno() {
            document.getElementById("externo").style.display = "none";
            document.getElementById("facultad").style.display = "initial";
            document.getElementById("carreras").style.display = "initial";
        }
        function fi() {
            document.getElementById("externo").style.display = "none";
            document.getElementById("facultad").style.display = "initial";
            document.getElementById("carreras").style.display = "initial";
        }
        function nofi() {
            document.getElementById("externo").style.display = "none";
            document.getElementById("facultad").style.display = "initial";
            document.getElementById("carreras").style.display = "none";
        }
    </script>

@endsection
