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
                      <h1>{{ $user->getNombreCurso() }} </h1>
                </div>
                <div class="panel-body">
 
<div class="row">
<div class="row">
  <div class="row col-md-12 ">
    <div class="form-group col-md-4">
      {!!Form::label("nombre", "Nombre:")!!}
      {!!Form::text("nombre", $user->getNombreCurso(), [ "class" => "form-control", "placeholder" => "Nombre", "required","disabled"])!!}
    </div>

    <div class="form-group col-md-4">
      {!!Form::label("semestre_imparticion", "Semestre:")!!}
      {!!Form::text("semestre_imparticion", $user->semestre_imparticion, [ "class" => "form-control", "placeholder" => "Semestre", "required","disabled"])!!}
    </div>
    <div class="form-group col-md-4">
      {!!Form::label("fecha_inicio", "Fecha de inicio:")!!}
      {!!Form::text("fecha_inicio", $user->fecha_inicio, [ "class" => "form-control", "placeholder" => "Fecha de inicio", "required","disabled"])!!}
    </div>
  </div>

  <div class="form-group col-md-6">
    {!!Form::label("fecha_fin", "Fecha de fin:")!!}
    {!!Form::text("fecha_fin", $user->fecha_fin, [ "class" => "form-control", "placeholder" => "Fecha de fin", "required","disabled"])!!}
  </div>

    <div class="form-group col-md-6">
    {!!Form::label("hora_inicio", "Hora de inicio:")!!}
    {!!Form::text("hora_inicio", $user->hora_inicio, [ "class" => "form-control", "placeholder" => "Hora de inicio", "required","disabled"])!!}
  </div>
      <div class="form-group col-md-6">
    {!!Form::label("hora_fin", "Hora de fin:")!!}
    {!!Form::text("hora_fin", $user->hora_fin, [ "class" => "form-control", "placeholder" => "Hora de fin", "required","disabled"])!!}
  </div>


 <div class="form-group col-md-6">
    {!!Form::label("dias_semana", "Dias a la semana:")!!}
    {!!Form::text("dias_semana", $user->dias_semana, [ "class" => "form-control", "placeholder" => "Dias a la semana", "required","disabled"])!!}
  </div>

   <div class="form-group col-md-6">
    {!!Form::label("numero_sesiones", "Numero de sesiones")!!}
    {!!Form::text("numero_sesiones", $user->numero_sesiones, [ "class" => "form-control", "placeholder" => "Sesiones", "required","disabled"])!!}
  </div>
  <div class="form-group col-md-6 ">
    {!!Form::label("texto_diploma", "Texto para diploma:")!!}
    {!!Form::text("texto_diploma", $user->texto_diploma, [ "class" => "form-control", "placeholder" => "Texto diploma", "required","disabled"])!!}
  </div>

    <div class="form-group col-md-6">
    {!!Form::label("profesor_id", "Profesor:")!!}
    {!!Form::text("profesor_id", $user->getProfesor(), [ "class" => "form-control", "placeholder" => "Profesor", "required","disabled"])!!}
  </div>


    <div class="form-group col-md-6">
    {!!Form::label("costo", "Costo:")!!}
    {!!Form::text("costo", $user->costo, [ "class" => "form-control", "placeholder" => "Costo", "required","disabled"])!!}
  </div>

   <div class="form-group col-md-6">
    {!!Form::label("orden", "Orden")!!}
    {!!Form::text("orden", $user->orden, [ "class" => "form-control", "placeholder" => "Orden", "required","disabled"])!!}
  </div>

   <div class="form-group col-md-6">
    {!!Form::label("fecha_disenio", "Fecha de diseño")!!}
    {!!Form::text("fecha_disenio", $user->fecha_disenio, [ "class" => "form-control", "placeholder" => "Fecha de diseño", "required","disabled"])!!}
  </div>

   <div class="form-group col-md-6">
    {!!Form::label("cupo_maximo", "Cupo maximo:")!!}
    {!!Form::text("cupo_maximo", $user->cupo_maximo, [ "class" => "form-control", "placeholder" => "Cupo maximo", "required","disabled"])!!}
  </div>

    <div class="form-group col-md-6">
    {!!Form::label("cupo_minimo", "Cupo minimo")!!}
    {!!Form::text("cupo_minimo", $user->cupo_minimo, [ "class" => "form-control", "placeholder" => "Cupo minimo", "required","disabled"])!!}
  </div>
   <div class="form-group col-md-6">
        {!!Form::label("status", "Estado:")!!}
        {!!Form::text("status", $user->status, [ "class" => "form-control", "placeholder" => "Estado", "required","disabled"])!!}
   </div>

    <div class="form-group col-md-6">
        {!!Form::label("salon_id", "Salon:")!!}
        {!!Form::text("salon_id", $user->getSalon(), [ "class" => "form-control", "placeholder" => "Salon", "required","disabled"])!!}
    </div>



 

 <td><a href="{{ URL::to('curso/actualizar', $user->id) }}" class="btn btn-info">Actualiza información</a>
            <a href="{{ URL::to('curso/baja', $user->id) }}" class="btn btn-danger">Dar de baja</a></td>
    
</div>



      </div>

     </section>
     
@endsection
  
