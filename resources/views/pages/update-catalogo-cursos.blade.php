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
                      <h1>{{ $user->nombre_curso}}</h1>
                </div>
                <div class="panel-body">



 
<div class="row">
<div class="row">
  <div class="row col-md-12 ">{!! Form::open(['route' => array('catalogo-cursos.actualizar', $user->id), "method" => "PUT"]) !!}

      <div class="form-group col-md-4">
          {!!Form::label("nombre_curso", "Nombre del curso:")!!}
          {!!Form::text("nombre_curso", $user->nombre_curso, [ "class" => "form-control", "placeholder" => "Nombre del curso", "required"])!!}
      </div>
      <div class="form-group col-md-4">
          {!!Form::label("duracion_curso", "Duracion del curso:")!!}
          {!!Form::text("duracion_curso", $user->duracion_curso, [ "class" => "form-control", "placeholder" => "Duracion_curso", "required"])!!}
      </div>

      <div class="form-group col-md-4">
          {!!Form::label("coordinacion_id", "Coordinacion:")!!}
          {!!Form::select("coordinacion_id", $user->allCoordinacion()->pluck('nombre_coordinacion','id'),$user->getIdCoordinacion(),['class'=>'form-control'])!!}
      </div>
  </div>

    <div class="form-group col-md-6">
        {!!Form::label("tipo", "Tipo:")!!}
        {!!Form::text("tipo", $user->tipo, [ "class" => "form-control", "placeholder" => "Fecha de fin", "required"])!!}
    </div>
    <div class="form-group col-md-6">
        {!!Form::label("tipo_curso_diploma_instructor", "Tipo curso Diploma-Instructor")!!}
        {!!Form::text("tipo_curso_diploma_instructor", $user->tipo_curso_diploma_instructor, [ "class" => "form-control", "placeholder" => "Hora de inicio", "required"])!!}
    </div>

    <div class="form-group col-md-6">
        {!!Form::label("presentacion", "Presentacion:")!!}
        {!!Form::text("presentacion", $user->presentacion, [ "class" => "form-control", "placeholder" => "Hora de fin", "required"])!!}
    </div>

    <div class="form-group col-md-6">
        {!!Form::label("tipo_difusion", "Tipo difusion:")!!}
        {!!Form::text("tipo_difusion", $user->tipo_difusion, [ "class" => "form-control", "placeholder" => "Dias a la semana", "required"])!!}
    </div>
    <div class="form-group col-md-6">
        {!!Form::label("dirigido", "Dirigido a:")!!}
        {!!Form::text("dirigido", $user->dirigido, [ "class" => "form-control", "placeholder" => "Numero de sesiones", "required"])!!}
    </div>

    <div class="form-group col-md-6 ">
        {!!Form::label("objetivo", "Objetivo:")!!}
        {!!Form::text("objetivo", $user->objetivo, [ "class" => "form-control", "placeholder" => "objetivo", "required"])!!}
    </div>


    <div class="form-group col-md-6">
        {!!Form::label("contenido", "Contenido:")!!}
        {!!Form::text("contenido", $user->contenido, [ "class" => "form-control", "placeholder" => "contenido", "required"])!!}
    </div>

    <div class="form-group col-md-6">
        {!!Form::label("sintesis", "Sintesis:")!!}
        {!!Form::text("sintesis", $user->sintesis, [ "class" => "form-control", "placeholder" => "Sintesis", "required"])!!}
    </div>

    <div class="form-group col-md-6">
        {!!Form::label("metodologia", "Metodologia:")!!}
        {!!Form::text("metodologia", $user->metodologia, [ "class" => "form-control", "placeholder" => "Cupo maximo", "required"])!!}
    </div>

    <div class="form-group col-md-6">
        {!!Form::label("acreditacion", "Acreditacion:")!!}
        {!!Form::text("acreditacion", $user->acreditacion, [ "class" => "form-control", "placeholder" => "Cupo minimo", "required"])!!}
    </div>
    <div class="form-group col-md-6">
        {!!Form::label("evaluacion", "Evaluacion:")!!}
        {!!Form::text("evaluacion", $user->evaluacion, [ "class" => "form-control", "placeholder" => "Estado", "required"])!!}
    </div>


    <div class="form-group col-md-6">
        {!!Form::label("bibliografia", "Bibliografia:")!!}
        {!!Form::text("bibliografia",$user->bibliografia , [ "class" => "form-control", "placeholder" => "Bibliografia", "required"])!!}
    </div>

    <div class="form-group col-md-6">
        {!!Form::label("antecedentes", "Antecedentes:")!!}
        {!!Form::text("antecedentes",$user->antecedentes , [ "class" => "form-control", "placeholder" => "Antecedentes", "required"])!!}
    </div>
    <div class="form-group col-md-6">
        {!!Form::label("consecuentes", "Consecuentes:")!!}
        {!!Form::text("consecuentes",$user->consecuentes , [ "class" => "form-control", "placeholder" => "Consecuentes", "required"])!!}
    </div>
    <div class="form-group col-md-6">
        {!!Form::label("fecha_disenio", "Fecha de diseño:")!!}
        {!!Form::text("fecha_disenio",$user->fecha_disenio , [ "class" => "form-control", "placeholder" => "Fecha de diseño", "required"])!!}
    </div>
    <div class="form-group col-md-6">
        {!!Form::label("clave_curso", "Clave:")!!}
        {!!Form::text("clave_curso",$user->clave_curso , [ "class" => "form-control", "placeholder" => "Clave", "required"])!!}
    </div>



    <div>
    <button type="submit" class="btn btn-primary col-md-offset-1">Actualizar</button>
  </div>
  {!! Form::close() !!}
</div>



      </div>

     </section>
     
@endsection
  
