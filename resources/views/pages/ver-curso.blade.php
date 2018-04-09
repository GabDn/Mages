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
                      <h1>{{ $user->nombre }} </h1>
                </div>
                <div class="panel-body">
 
<div class="row">
<div class="row">
  <div class="row col-md-12 ">
    <div class="form-group col-md-4">
      {!!Form::label("nombre", "Nombre")!!}
      {!!Form::text("nombre", $user->nombre, [ "class" => "form-control", "placeholder" => "Nombre", "required","disabled"])!!}
    </div>

    <div class="form-group col-md-4">
      {!!Form::label("ap_pat", "Tipo de diploma")!!}
      {!!Form::text("ap_pat", $user->apellido_paterno, [ "class" => "form-control", "placeholder" => "Tipo en diploma", "required","disabled"])!!}
    </div>

    <div class="form-group col-md-4">
      {!!Form::label("ap_mat", "Tipo")!!}
      {!!Form::text("ap_mat", $user->tipo, [ "class" => "form-control", "placeholder" => "tipo", "required","disabled"])!!}
    </div>
  </div>

  <div class="form-group col-md-6">
    {!!Form::label("presentación", "Presentación")!!}
    {!!Form::text("presentación", $user->presentación, [ "class" => "form-control", "placeholder" => "presentación", "required","disabled"])!!}
  </div>

    <div class="form-group col-md-6">
    {!!Form::label("tipo_difusion", "Tipo de difusion")!!}
    {!!Form::text("tipo_difusion", $user->tipo_difusion, [ "class" => "form-control", "placeholder" => "presentación", "required","disabled"])!!}
  </div>

      <div class="form-group col-md-6">
    {!!Form::label("dirigido_a", "Dirigido a")!!}
    {!!Form::text("dirigido_a", $user->dirigido_a, [ "class" => "form-control", "placeholder" => "presentación", "required","disabled"])!!}
  </div>
 <div class="form-group col-md-6">
    {!!Form::label("objetivo", "Objetivo")!!}
    {!!Form::text("objetivo", $user->objetivo, [ "class" => "form-control", "placeholder" => "presentación", "required","disabled"])!!}
  </div>

   <div class="form-group col-md-6">
    {!!Form::label("contenido", "Contenido")!!}
    {!!Form::text("contenido", $user->contenido, [ "class" => "form-control", "placeholder" => "presentación", "required","disabled"])!!}
  </div>


  <div class="form-group col-md-6 ">
    {!!Form::label("sintesis", "Sintesis")!!}
    {!!Form::text("sintesis", $user->sintesis, [ "class" => "form-control", "placeholder" => "Número de Teléfono", "required","disabled"])!!}
  </div>


    <div class="form-group col-md-6">
    {!!Form::label("metodologia", "Metodologia")!!}
    {!!Form::text("metodologia", $user->metodologia, [ "class" => "form-control", "placeholder" => "presentación", "required","disabled"])!!}
  </div>

    <div class="form-group col-md-6">
    {!!Form::label("acreditacion", "Acreditacion")!!}
    {!!Form::text("acreditacion", $user->acreditacion, [ "class" => "form-control", "placeholder" => "presentación", "required","disabled"])!!}
  </div>



   <div class="form-group col-md-6">
    {!!Form::label("cobro", "Presentacion")!!}
    {!!Form::text("cobro", $user->cobro, [ "class" => "form-control", "placeholder" => "presentación", "required","disabled"])!!}
  </div>

   <div class="form-group col-md-6">
    {!!Form::label("bibliografia", "Bibliografia")!!}
    {!!Form::text("bibliografia", $user->bibliografia, [ "class" => "form-control", "placeholder" => "presentación", "required","disabled"])!!}
  </div>

   <div class="form-group col-md-6">
    {!!Form::label("antecedentes", "Antecedentes")!!}
    {!!Form::text("antecedentes", $user->antecedentes, [ "class" => "form-control", "placeholder" => "presentación", "required","disabled"])!!}
  </div>

   <div class="form-group col-md-6">
    {!!Form::label("consecuentes", "Consecuentes")!!}
    {!!Form::text("consecuentes", $user->consecuentes, [ "class" => "form-control", "placeholder" => "presentación", "required","disabled"])!!}
  </div>

   <div class="form-group col-md-6">
    <?php $coord_nom = DB::table('coordinacions')->where('id','=',$user->coordinacion_id)->value('nombre_coordinacion');?>
    {!!Form::label("coordinacion_id", "Coordinación")!!}
    {!!Form::text("coordinacion id", $coord_nom, [ "class" => "form-control", "placeholder" => "Coordinacion", "required","disabled"])!!}
  </div>

 

 <td><a href="{{ URL::to('curso/actualizar', $user->id) }}" class="btn btn-info">Actualiza información</a>
            <a href="{{ URL::to('curso/baja', $user->id) }}" class="btn btn-danger">Dar de baja</a></td>
    
</div>



      </div>

     </section>
     
@endsection
  
