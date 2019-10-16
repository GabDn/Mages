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
    @if(session()->has('msj'))
      <div class="alert alert-danger" role='alert'>{{session('msj')}}</div>
    @endif
    <br>
      <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="container">
                  <h3>Cursos programados</h3>


                  {!! Form::open(["route" => ["curso.Csearch"], "method" => "POST"]) !!}
                  <div class="input-group">
                    <div class="row row-eq-height align-items-center">

                      <div class="row">
                          {!!Form::text("pattern", null, [ "class" => "form-control", "placeholder" => "Buscar Curso", "id"=>"entrada"])!!}
                      </div>

                      <div class="row">
                        <label id="AnioP" for="name" class="col-md-6 control-label">Año:</label>
                        <div class="col-md-6">
                            <input id="Anio" type="year"  class="form-control" name="anio" placeholder="Año">
                        </div>
                      </div>
                        <label id="SemP" for="name" class="col-md-6 control-label">Semestre:</label>
                        <div class="col-md-6">
                          <select id='Sem' class = 'btn dropdown-toggle pull-left' placeholder='S/I'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                          </select> 
                        </div>
                        <label id="IOP" for="name" class="col-md-6 control-label">Tipo:</label>
                        <div class="col-md-6">
                          <select id='IO' class = 'btn dropdown-toggle pull-left' placeholder='S/I'>
                            <option value="Intersemestral">Intersemestral</option>
                            <option value="Smestral">Smestral</option>
                          </select> 
                        </div>
                      <hr id="hr">
                      <div class="row">
                          <select class = 'btn dropdown-toggle pull-left' id='myselect'>
                            <option value="nombre_curso" onclick='esconder();'>Por nombre</option>
                            <option value="fechas" onclick='selectCheck();'>Por fechas</option>
                            <option value="titular" onclick='esconder();'>Por profesor titular</option>
                          </select>
                          <span class="input-group-btn col-md-2">
                               <button class="btn btn-secondary" type="submit">Buscar</button>
                          </span>
                      </div>
                    </div>
                    </div>

                  <script type="text/javascript">
                    function selectCheck() {
                            document.getElementById('Anio').style.display = 'block';
                            document.getElementById('AnioP').style.display = 'block';
                            document.getElementById('Sem').style.display = 'block';
                            document.getElementById('SemP').style.display = 'block';
                            document.getElementById('IO').style.display = 'block';
                            document.getElementById('IOP').style.display = 'block';
                            document.getElementById('hr').style.display = 'block';
                            document.getElementById('entrada').style.display = 'none';
                    }
                    function esconder() {
                            document.getElementById('Anio').style.display = 'none';
                            document.getElementById('AnioP').style.display = 'none';
                            document.getElementById('Sem').style.display = 'none';
                            document.getElementById('SemP').style.display = 'none';
                            document.getElementById('IO').style.display = 'none';
                            document.getElementById('IOP').style.display = 'none';
                            document.getElementById('hr').style.display = 'none';
                            document.getElementById('entrada').style.display = 'block';
                    }
                    esconder();
                  </script>
                    {!! Form::close() !!}

                  </div>
                </div>
      </div>
      <div class="panel-body">

        <table class="col-md-12">
     <tr>
        <th>Nombre</th>
         <th>Profesor</th>
        <th>Salon</th>
        <th></th>
     </tr>
    @foreach($users as $user)
        <tr>
        <td>{{ $user->getNombreCurso() }} </td>
        <td>{{$user->getProfesor()}}</td>
        <td>{{ $user->getSalon()}}</td>
        <td>
            <a href="{{ URL::to('curso/generar-formatos',$user->id) }}" class="btn btn-warning">Generar formatos</a>
            <a href="{{ URL::to('curso/ver-profesores',$user->id) }}" class="btn btn-warning">Ver Curso</a>
            <a href="{{ URL::to('curso/inscripcion',$user->id)}}" class="btn btn-success">Inscribir</a>
            <a href="{{ URL::to('curso', $user->id) }}" class="btn btn-info">Detalles</a>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Dar de baja</button>
        </td>
      </tr>

                  <!-- Modal -->
                    <div class="modal fade" id="myModal" role="dialog">
                      <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Eliminar Curso</h4>
                          </div>
                          <div class="modal-body">
                            <p><b>¿Está seguro de eliminar el curso?</b></p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-normal" data-dismiss="modal" aria-label="Close">Cancelar</button>
                            <a href="{{ URL::to('curso/baja', $user->id) }}" class="btn btn-danger">Dar de baja</a>
                          </div>
                        </div>
                      </div>
                    </div>
    @endforeach

</table>

                
      

      </div>
      <script type="text/javascript">
        
      </script>

     </section>
     
@endsection
  
