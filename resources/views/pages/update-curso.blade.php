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
                      <h1>{{ $user->nombre }}</h1>
                </div>
                <div class="panel-body">



 
<div class="row">
<div class="row">
  <div class="row col-md-12 ">{!! Form::open(['route' => array('curso.actualizar', $user->id), "method" => "PUT"]) !!}

      <div class="form-group col-md-4">
      {!!Form::label("nombre", "Nombre")!!}
      {!!Form::text("nombre", $user->nombre, [ "class" => "form-control", "placeholder" => "Nombre", "required",""])!!}
    </div>

    <div class="form-group col-md-4">
      {!!Form::label("tipo_diploma", "Tipo en diploma")!!}
      {!!Form::text("tipo_curso_diploma", $user->tipo_curso_diploma, [ "class" => "form-control", "placeholder" => "Tipo en diploma", "required",""])!!}
    </div>

    <div class="form-group col-md-4">
      {!!Form::label("tipo", "Tipo")!!}
      {!!Form::text("tipo", $user->tipo, [ "class" => "form-control", "placeholder" => "tipo", "required",""])!!}
    </div>
  </div>

  <div class="form-group col-md-6">
    {!!Form::label("presentación", "presentación")!!}
    {!!Form::text("presentación", $user->presentación, [ "class" => "form-control", "placeholder" => "presentación", "required",""])!!}
  </div>

    <div class="form-group col-md-6">
    {!!Form::label("tipo_difusion", "tipo de difusion")!!}
    {!!Form::text("tipo_difusion", $user->tipo_difusion, [ "class" => "form-control", "placeholder" => "presentación", "required",""])!!}
  </div>

      <div class="form-group col-md-6">
    {!!Form::label("dirigido_a", "Dirigido a")!!}
    {!!Form::text("dirigido_a", $user->dirigido_a, [ "class" => "form-control", "placeholder" => "presentación", "required",""])!!}
  </div>
 <div class="form-group col-md-6">
    {!!Form::label("objetivo", "objetivo")!!}
    {!!Form::text("objetivo", $user->objetivo, [ "class" => "form-control", "placeholder" => "presentación", "required",""])!!}
  </div>

   <div class="form-group col-md-6">
    {!!Form::label("contenido", "contenido")!!}
    {!!Form::text("contenido", $user->contenido, [ "class" => "form-control", "placeholder" => "presentación", "required",""])!!}
  </div>


  <div class="form-group col-md-6 ">
    {!!Form::label("sintesis", "Sintesis")!!}
    {!!Form::text("sintesis", $user->sintesis, [ "class" => "form-control", "placeholder" => "Número de Teléfono", "required",""])!!}
  </div>


    <div class="form-group col-md-6">
    {!!Form::label("metodologia", "metodologia")!!}
    {!!Form::text("metodologia", $user->metodologia, [ "class" => "form-control", "placeholder" => "presentación", "required",""])!!}
  </div>

    <div class="form-group col-md-6">
    {!!Form::label("acreditacion", "acreditacion")!!}
    {!!Form::text("acreditacion", $user->acreditacion, [ "class" => "form-control", "placeholder" => "presentación", "required",""])!!}
  </div>



   <div class="form-group col-md-6">
    {!!Form::label("cobro", "Presentacion")!!}
    {!!Form::text("cobro", $user->cobro, [ "class" => "form-control", "placeholder" => "presentación", "required",""])!!}
  </div>

   <div class="form-group col-md-6">
    {!!Form::label("bibliografia", "bibliografia")!!}
    {!!Form::text("bibliografia", $user->bibliografia, [ "class" => "form-control", "placeholder" => "presentación", "required",""])!!}
  </div>

   <div class="form-group col-md-6">
    {!!Form::label("antecedentes", "Antecedentes")!!}
    {!!Form::text("antecedentes", $user->antecedentes, [ "class" => "form-control", "placeholder" => "presentación", "required",""])!!}
  </div>

   <div class="form-group col-md-6">
    {!!Form::label("consecuentes", "Consecuentes")!!}
    {!!Form::text("consecuentes", $user->consecuentes, [ "class" => "form-control", "placeholder" => "presentación", "required",""])!!}
  </div>

   <div class="form-group col-md-6">
    {!!Form::label("coordinacion_id", "Coordinación")!!}
       {!!Form::text("coordinacion_id", $user->coordinacion_id, [ "class" => "form-control", "placeholder" => "Coordinacion", "required",""])!!}

  </div>


<div>
    <button type="submit" class="btn btn-primary col-md-offset-1">Actualizar</button>
  </div>
  {!! Form::close() !!}
</div>



      </div>

     </section>
     
@endsection
  
