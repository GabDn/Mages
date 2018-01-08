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
                      <h1>{{ $user->nombres }} {{ $user->apellido_paterno }} {{ $user->apellido_materno }}</h1>
                </div>
                <div class="panel-body">



 
<div class="row">{!! Form::open(['route' => array('profesor.actualizar', $user->id), "method" => "PUT"]) !!}
  <div class="row col-md-12 ">
    <div class="form-group col-md-4">
      {!!Form::label("nombres", "Nombre")!!}
      {!!Form::text("nombres", $user->nombres, [ "class" => "form-control", "placeholder" => "Nombre", "required",""])!!}
    </div>

    <div class="form-group col-md-4">
      {!!Form::label("apellido_paterno", "Apellido Paterno")!!}
      {!!Form::text("apellido_paterno", $user->apellido_paterno, [ "class" => "form-control", "placeholder" => "Apellido Paterno", "required",""])!!}
    </div>

    <div class="form-group col-md-4">
      {!!Form::label("apellido_materno", "Apellido Materno")!!}
      {!!Form::text("apellido_materno", $user->apellido_materno, [ "class" => "form-control", "placeholder" => "Apellido Materno", "required",""])!!}
    </div>
  </div>

  <div class="form-group col-md-6">
    {!!Form::label("rfc", "RFC")!!}
    {!!Form::text("rfc", $user->rfc, [ "class" => "form-control", "placeholder" => "RFC", "required",""])!!}
  </div>

    <div class="form-group col-md-6">
    {!!Form::label("curp", "curp")!!}
    {!!Form::text("curp", $user->curp, [ "class" => "form-control", "placeholder" => "RFC", "required",""])!!}
  </div>

      <div class="form-group col-md-6">
    {!!Form::label("fecha_nacimiento", "fecha de nacimiento")!!}
    {!!Form::text("fecha_nacimiento", $user->fecha_nacimiento, [ "class" => "form-control", "placeholder" => "RFC", "required",""])!!}
  </div>
 <div class="form-group col-md-6">
    {!!Form::label("grado", "Grado")!!}
    {!!Form::text("grado", $user->grado, [ "class" => "form-control", "placeholder" => "RFC", "required",""])!!}
  </div>

   <div class="form-group col-md-6">
    {!!Form::label("email", "Email")!!}
    {!!Form::text("email", $user->email, [ "class" => "form-control", "placeholder" => "RFC", "required",""])!!}
  </div>

   <div class="form-group col-md-6">
    {!!Form::label("created_at", "fecha de alta")!!}
    {!!Form::text("created_at", $user->created_at, [ "class" => "form-control", "placeholder" => "RFC", "required",""])!!}
  </div>




  <div class="form-group col-md-6 ">
    {!!Form::label("telefono", "Número de Teléfono")!!}
    {!!Form::text("telefono", $user->telefono, [ "class" => "form-control", "placeholder" => "Número de Teléfono", "required",""])!!}
  </div>

  <div class="form-group col-md-6 ">
    {!!Form::label("email", "E-Mail")!!}
    {!!Form::text("email", $user->email, [ "class" => "form-control", "placeholder" => "example@hotmail.com", "required" ,"",""])!!}
  </div>

    <div class="form-group col-md-6">
    {!!Form::label("estudios", "Estudios")!!}
    {!!Form::text("estudios", $user->estudios, [ "class" => "form-control", "placeholder" => "RFC", "required",""])!!}
  </div>

   <div class="form-group col-md-6">
    {!!Form::label("grado", "Grado")!!}
    {!!Form::text("grado", $user->grado, [ "class" => "form-control", "placeholder" => "RFC", "required",""])!!}
  </div>

   <div class="form-group col-md-6">
    {!!Form::label("area", "Area")!!}
    {!!Form::text("area", $user->area, [ "class" => "form-control", "placeholder" => "RFC", "required",""])!!}
  </div>

   <div class="form-group col-md-6">
    {!!Form::label("comentarios", "Comentarios")!!}
    {!!Form::text("comentarios", $user->comentarios, [ "class" => "form-control", "placeholder" => "RFC", "required",""])!!}
  </div>

   <div class="form-group col-md-6">
    {!!Form::label("genero", "Genero")!!}
    {!!Form::text("genero", $user->genero, [ "class" => "form-control", "placeholder" => "RFC", "required",""])!!}
  </div>

   <div class="form-group col-md-6">
    {!!Form::label("tutor", "Tutor")!!}
    {!!Form::text("tutor", $user->tutor, [ "class" => "form-control", "placeholder" => "RFC", "required",""])!!}
  </div>

   <div class="form-group col-md-6">
    {!!Form::label("semblanza_corta", "Semblanza corta")!!}
    {!!Form::text("semblanza_corta", $user->semblanza_corta, [ "class" => "form-control", "placeholder" => "RFC", "required",""])!!}
  </div>

   <div class="form-group col-md-6">
    {!!Form::label("facebook", "Facebook")!!}
    {!!Form::text("facebook", $user->facebook, [ "class" => "form-control", "placeholder" => "RFC", "required",""])!!}
  </div>

 <div>
    <button type="submit" class="btn btn-primary col-md-offset-1">Actualizar</button>
  </div>
  {!! Form::close() !!}
           
    
</div>


      </div>

     </section>
     
@endsection
  