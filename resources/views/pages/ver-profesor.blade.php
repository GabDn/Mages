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

  <div class="row col-md-12 ">
    <div class="form-group col-md-4 col-sm-6">
      {!!Form::label("nombre", "Nombre")!!}
      {!!Form::text("nombre", $user->nombres, [ "class" => "form-control", "placeholder" => "Nombre", "required","disabled"])!!}
    </div>

    <div class="form-group col-md-4 col-sm-6">
      {!!Form::label("ap_pat", "Apellido Paterno")!!}
      {!!Form::text("ap_pat", $user->apellido_paterno, [ "class" => "form-control", "placeholder" => "Apellido Paterno", "required","disabled"])!!}
    </div>

    <div class="form-group col-md-4 col-sm-6">
      {!!Form::label("ap_mat", "Apellido Materno")!!}
      {!!Form::text("ap_mat", $user->apellido_materno, [ "class" => "form-control", "placeholder" => "Apellido Materno", "required","disabled"])!!}
    </div>

  <div class="form-group col-md-6 col-sm-6">
    {!!Form::label("rfc", "RFC")!!}
    {!!Form::text("rfc", $user->rfc, [ "class" => "form-control", "placeholder" => "RFC", "required","disabled"])!!}
  </div>

    <div class="form-group col-md-6 col-sm-6">
        {!!Form::label("curp", "curp")!!}
        {!!Form::text("curp", $user->curp, [ "class" => "form-control", "placeholder" => "CURP", "required","disabled"])!!}
    </div>

  <div class="form-group col-md-4 col-sm-6">
    {!!Form::label("fecha_nacimiento", "Fecha de nacimiento:")!!}
    {!!Form::text("fecha_nacimiento", $user->fecha_nacimiento, [ "class" => "form-control", "placeholder" => "Fecha de nacimiento", "required","disabled"])!!}
  </div>

   <div class="form-group col-md-4 col-sm-6">
    {!!Form::label("genero", "Genero")!!}
    {!!Form::text("genero", $user->genero, [ "class" => "form-control", "placeholder" => "Genero", "required","disabled"])!!}
  </div>

    <div class="form-group col-md-4 col-sm-6">
        {!!Form::label("categoria_nivel_id", "Categoria y nivel:")!!}
        {!!Form::text("categoria_nivel_id", $user->getCategoria(), [ "class" => "form-control", "placeholder" => "Categoria y nivel", "required","disabled"])!!}
    </div>

   <div class="form-group col-md-4 col-sm-6">
    {!!Form::label("area", "Area")!!}
    {!!Form::text("area", $user->area, [ "class" => "form-control", "placeholder" => "Area", "required","disabled"])!!}
  </div>

   <div class="form-group col-md-4 col-sm-6">
    {!!Form::label("grado", "Grado")!!}
    {!!Form::text("grado", $user->grado, [ "class" => "form-control", "placeholder" => "Grado", "required","disabled"])!!}
  </div>

   <div class="form-group col-md-4 col-sm-6">
    {!!Form::label("created_at", "Fecha de alta")!!}
    {!!Form::text("created_at", $user->created_at, [ "class" => "form-control", "placeholder" => "Fecha de alta", "required","disabled"])!!}
  </div>

   <div class="form-group col-md-4 col-sm-6">
    {!!Form::label("tutor", "Tutor")!!}
    @if($user->tutor === "true")
    {!!Form::text("tutor", "Sí", [ "class" => "form-control", "placeholder" => "Tutor", "required","disabled"])!!}
    @else
    {!!Form::text("tutor", "No", [ "class" => "form-control", "placeholder" => "Tutor", "required","disabled"])!!}
    @endif
  </div>


   <div class="form-group col-md-4 col-sm-6">
    {!!Form::label("email", "Email")!!}
    {!!Form::text("email", $user->email, [ "class" => "form-control", "placeholder" => "Email", "required","disabled"])!!}
  </div>

  <div class="form-group col-md-4 col-sm-6">
    {!!Form::label("telefono", "Número de Teléfono")!!}
    {!!Form::text("telefono", $user->telefono, [ "class" => "form-control", "placeholder" => "Número de Teléfono", "required","disabled"])!!}
  </div>

   <div class="form-group col-md-4 col-sm-6">
    {!!Form::label("facebook", "Facebook")!!}
    {!!Form::text("facebook", $user->facebook, [ "class" => "form-control", "placeholder" => "Facebook", "required","disabled"])!!}
    <hr>
 <td><a href="{{ URL::to('profesor/actualizar', $user->id) }}" class="btn btn-info btn-block">Actualiza información</a>
            <a href="{{ URL::to('profesor/baja', $user->id) }}" class="btn btn-danger btn-block">Dar de baja</a></td>
  </div>

   <div class="form-group col-md-4 col-sm-6">
    {!!Form::label("comentarios", "Comentarios")!!}
    {!!Form::textarea("comentarios", $user->comentarios, [ "class" => "form-control", "placeholder" => "Comentarios", "required","disabled"])!!}
  </div>

   <div class="form-group col-md-4 col-sm-6">
    {!!Form::label("semblanza_corta", "Semblanza corta")!!}
    {!!Form::textarea("semblanza_corta", $user->semblanza_corta, [ "class" => "form-control", "placeholder" => "Semblanza", "required","disabled"])!!}
  </div>

</div>
</div>

     </section>
     
@endsection
  
