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
                      <h1>{{ $user->getNombreCurso() }}</h1>
                </div>
                <div class="panel-body">



 
<div class="row">
<div class="row">
  <div class="row col-md-12 ">{!! Form::open(['route' => array('curso.actualizar', $user->id), "method" => "PUT"]) !!}

      <div class="form-group col-md-6">
          {!!Form::label("catalogo_id", "Nombre:")!!}
          {!!Form::select("catalogo_id", $user->allNombreCurso()->pluck('nombre_curso','id'),$user->getNombreCurso(),['class'=>'form-control'])!!}
      </div>

      <div class="form-group col-md-4">
          {!!Form::label("semestre_imparticion", "Semestre:")!!}
          {!!Form::text("semestre_imparticion", $user->semestre_imparticion, [ "class" => "form-control", "placeholder" => "Semestre", "required",""])!!}
      </div>
      <div class="form-group col-md-4">
          {!!Form::label("fecha_inicio", "Fecha de inicio:")!!}
          {!!Form::date("fecha_inicio", $user->fecha_inicio, [ "class" => "form-control", "placeholder" => "Fecha de inicio", "required",""])!!}
      </div>
  </div>

    <div class="form-group col-md-6">
        {!!Form::label("fecha_fin", "Fecha de fin:")!!}
        {!!Form::date("fecha_fin", $user->fecha_fin, [ "class" => "form-control", "placeholder" => "Fecha de fin", "required",""])!!}
    </div>

    <div class="form-group col-md-6">
        {!!Form::label("hora_inicio", "Hora de inicio:")!!}
        {!!Form::text("hora_inicio", $user->hora_inicio, [ "class" => "form-control", "placeholder" => "Hora de inicio", "required",""])!!}
    </div>
    <div class="form-group col-md-6">
        {!!Form::label("hora_fin", "Hora de fin:")!!}
        {!!Form::text("hora_fin", $user->hora_fin, [ "class" => "form-control", "placeholder" => "Hora de fin", "required",""])!!}
    </div>


    <div class="form-group col-md-6">
        {!!Form::label("dias_semana", "Dias a la semana:")!!}
        {!!Form::text("dias_semana", $user->dias_semana, [ "class" => "form-control", "placeholder" => "Dias a la semana", "required",""])!!}
    </div>

    <div class="form-group col-md-6">
        {!!Form::label("numero_sesiones", "Numero de sesiones")!!}
        {!!Form::number("numero_sesiones", $user->numero_sesiones, [ "class" => "form-control", "placeholder" => "Sesiones", "required",""])!!}
    </div>
    <div class="form-group col-md-6 ">
        {!!Form::label("texto_diploma", "Texto para diploma:")!!}
        {!!Form::text("texto_diploma", $user->texto_diploma, [ "class" => "form-control", "placeholder" => "Texto diploma", "required",""])!!}
    </div>

    <div class="form-group col-md-6">
        {!!Form::label("profesor_id", "Profesor:")!!}
        {!!Form::select("profesor_id", $user->allProfesor()->pluck('nombres','id'),$user->getIdProfesor(),['class'=>'form-control'])!!}
    </div>


    <div class="form-group col-md-6">
        {!!Form::label("costo", "Costo:")!!}
        {!!Form::number("costo", $user->costo, [ "class" => "form-control", "placeholder" => "Costo", "required",""])!!}
    </div>

    <div class="form-group col-md-6">
        {!!Form::label("orden", "Orden")!!}
        {!!Form::text("orden", $user->orden, [ "class" => "form-control", "placeholder" => "Orden", "required",""])!!}
    </div>

    <div class="form-group col-md-6">
        {!!Form::label("fecha_disenio", "Fecha de diseño")!!}
        {!!Form::date("fecha_disenio", $user->fecha_disenio, [ "class" => "form-control", "placeholder" => "Fecha de diseño", "required",""])!!}
    </div>

    <div class="form-group col-md-6">
        {!!Form::label("cupo_maximo", "Cupo maximo:")!!}
        {!!Form::number("cupo_maximo", $user->cupo_maximo, [ "class" => "form-control", "placeholder" => "Cupo maximo", "required",""])!!}
    </div>

    <div class="form-group col-md-6">
        {!!Form::label("cupo_minimo", "Cupo minimo")!!}
        {!!Form::number("cupo_minimo", $user->cupo_minimo, [ "class" => "form-control", "placeholder" => "Cupo minimo", "required",""])!!}
    </div>
    <div class="form-group col-md-6">
        {!!Form::label("status", "Estado:")!!}
        {!!Form::select("status", ['Activo' => 'Activo','Inactivo' => 'Inactivo'], $user->status,[ "class" => "form-control", null, "required",""])!!}
    </div>

    <div class="form-group col-md-6">
        {!!Form::label("salon_id", "Salon:")!!}
        {!!Form::select("salon_id", $user->allSalon()->pluck('sede','id'),$user->getIdSalon(),['class'=>'form-control'])!!}
    </div>

    <div>
    <button type="submit" class="btn btn-primary col-md-offset-1">Actualizar</button>
  </div>
  {!! Form::close() !!}
</div>



      </div>

     </section>
     
@endsection
  
