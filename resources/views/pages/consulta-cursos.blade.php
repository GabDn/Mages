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
                    <h3>Cursos programados</h3>


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
            <a href="{{ URL::to('curso/baja', $user->id) }}" class="btn btn-danger">Dar de baja</a></td>
      </tr>
    @endforeach
</table>

                
      

      </div>

     </section>
     
@endsection
  
