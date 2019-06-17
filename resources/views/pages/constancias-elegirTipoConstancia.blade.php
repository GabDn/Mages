<!-- Guardado en resources/views/pages/admin.blade.php -->

@extends('layouts.principal')

@section('contenido')
  <!--Body content-->
<style>
    nav.navbar{
        background-color: #FAF8F8;
    }
</style>

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
                    <h3>Bienvenido @usuario</h3>
                    <h4>Coordinación de Gestión y Vinculación</h4>
                </div>
                <div class="panel-body">

                <div class="logos col-md-12 col-center">
                	<img class="img-escudo" src="{{ asset('img/cdd.png') }}">
                	Manejo y Gestión de información del centro de docencia.</h3>
                
                </div>

                <hr>
                <h2>Constancias <span class="fa fa-file-pdf-o"</span></h2>


                    <table class="table table-hover">
                       <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
                            <div class="collapse navbar-collapse" id="menuCurso">
                     
              <form class="form-horizontal" method="POST" action="{{ route('constancias.generar') }}">
                {{ csrf_field() }}

                
                <div class="form-group {{ $errors->has('type') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Tipo de constancia: </label>
                            <div class="col-md-6">
                                <select id="type" class="form-control" name="type" value="{{ old('type')}}" required>
                                    <option value="A">Instructores y Coordinador</option>
                                    <option value="B">Instructores y Coordinación General</option>
                                    <option value="C">Instructores y SAD</option>
                                    <option value="D">Instructores</option>
                                </select>
                                @if ($errors->has('type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
          <table class="col-md-12">
                <tr>
                    <th>Nombre</th>
                    <th>Profesor</th>
                    <th>Salon</th>
                    <th>Semestre</th>
                    <th></th>
                </tr>
                @foreach($cursos as $curso)
                  <tr>
                      <td>{{ $curso->getNombreCurso() }} </td>
                      <td>{{$curso->getProfesor()}}</td>
                      <td>{{ $curso->getSalon()}}</td>
                      <td>{{ $curso->semestre_imparticion }}</td>
                      <td>
                          <button type="submit" class="btn btn-primary form-control" name="id" value="{{$curso->id}}">
                            Crear
                        </button>
                </tr>
                  @endforeach

            </table>

          </form>

                
                                                        
      </div>

     </section>
	 
@endsection
  

  
