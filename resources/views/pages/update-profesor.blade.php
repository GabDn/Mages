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
                 {!!Form::label("nombres", "Nombre:")!!}
                 {!!Form::text("nombres", $user->nombres, [ "class" => "form-control", "placeholder" => "Nombre", "required",""])!!}
             </div>
            <div class="form-group col-md-4">
                 {!!Form::label("apellido_paterno", "Apellido Paterno:")!!}
                 {!!Form::text("apellido_paterno", $user->apellido_paterno, [ "class" => "form-control", "placeholder" => "Apellido Paterno", "required",""])!!}
            </div>
             <div class="form-group col-md-4">
                {!!Form::label("apellido_materno", "Apellido Materno:")!!}
                {!!Form::text("apellido_materno", $user->apellido_materno, [ "class" => "form-control", "placeholder" => "Apellido Materno", "required",""])!!}
            </div>
         </div>

         <div class="form-group col-md-6">
           {!!Form::label("rfc", "RFC:")!!}
           {!!Form::text("rfc", $user->rfc, [ "class" => "form-control", "placeholder" => "RFC", "required",""])!!}
         </div>

         <div class="form-group col-md-6">
            {!!Form::label("curp", "Curp:")!!}
            {!!Form::text("curp", $user->curp, [ "class" => "form-control", "placeholder" => "CURP", "required",""])!!}
         </div>

         <div class="form-group col-md-4">
            {!!Form::label("categoria_nivel_id", "Categoria y Nivel:")!!}
            {!!Form::select("categoria_nivel_id", $user->allCategoria()->pluck('categoria','id'),$user->getIdCategoria(),['class'=>'form-control'])!!}
         </div>

          <div class="form-group col-md-4">
              <label for="name" class="control-label">Fecha de nacimiento:</label>
                <input id="fecha_nacimiento" type="date" class="form-control" name="fecha_nacimiento" value="{{ $user->fecha_nacimiento }}" >
          </div>

        <div class="form-group col-md-6">
            {!!Form::label("area", "Area:")!!}
            {!!Form::text("area", $user->area, [ "class" => "form-control", "placeholder" => "Area", "required",""])!!}
        </div>

        <div class="form-group col-md-6">
            {!!Form::label("grado", "Grado:")!!}
            {!!Form::text("grado", $user->grado, [ "class" => "form-control", "placeholder" => "Grado", "required",""])!!}
        </div>

        <div class="form-group col-md-6 ">
            {!!Form::label("telefono", "Número de Teléfono:")!!}
            {!!Form::text("telefono", $user->telefono, [ "class" => "form-control", "placeholder" => "Número de Teléfono", "required",""])!!}
        </div>

        <div class="form-group col-md-6 ">
            {!!Form::label("email", "Email:")!!}
            {!!Form::text("email", $user->email, [ "class" => "form-control", "placeholder" => "example@hotmail.com", "required" ,"",""])!!}
        </div>

       <div class="form-group col-md-6">
        {!!Form::label("facebook", "Facebook:")!!}
        {!!Form::text("facebook", $user->facebook, [ "class" => "form-control", "placeholder" => "Facebook", "required",""])!!}
       </div>

      <div class="form-group col-md-6">
        <div class="col-md-4">
          {!!Form::label("genero", "Genero:")!!}
        </div>
          <div class="col-md-4">
            <div class="row">
              <label class="radio-inline">
                @if($user->genero === "masculino")
                <input id="femenino" type="radio" name="genero" value="femenino" checked>
                @else
                <input id="femenino" type="radio" name="genero" value="femenino">
                @endif
                Femenino
              </label>
            </div>
            <div class="row">
              <label class="radio-inline">
                @if($user->genero === "masculino")
                <input id="masculino" type="radio" name="genero" value="masculino" checked>
                @else
                <input id="masculino" type="radio" name="genero" value="masculino">
                @endif
                Masculino
              </label>
          </div>
          </div>
      </div>

      <div class="form-group col-md-6">
        <div class="col-md-4">
          {!!Form::label("tutor", "Tutor:")!!}
        </div>
          <div class="col-md-4">
            <div class="row">
              <label class="radio-inline">
                @if($user->tutor === "true")
                <input id="tutor" type="radio" name="tutor" value="T" checked>
                @else
                <input id="tutor" type="radio" name="tutor" value="T">
                @endif
                Sí
              </label>
            </div>
            <div class="row">
              <label class="radio-inline">
                @if($user->tutor !== "true")
                <input id="tutor" type="radio" name="tutor" value="F" checked>
                @else
                <input id="tutor" type="radio" name="tutor" value="F">
                @endif
                No
              </label>
          </div>
          </div>
      </div>

       <div class="form-group col-md-6">
            {!!Form::label("comentarios", "Comentarios:")!!}
            {!!Form::textarea("comentarios", $user->comentarios, [ "class" => "form-control", "placeholder" => "Comentarios", "required",""])!!}
        </div>

       <div class="form-group col-md-6">
        {!!Form::label("semblanza_corta", "Semblanza corta:")!!}
        {!!Form::textarea("semblanza_corta", $user->semblanza_corta, [ "class" => "form-control", "placeholder" => "Semblanza", "required",""])!!}
      </div>
      <div class="col-md-6">
        <a href="{{ URL::to('profesor', $user->id) }}" class="btn btn-info btn-block">Cancelar</a>
      </div>
      <div class="col-md-6">
        <button type="submit" class="btn btn-primary btn-block">Actualizar</button>
      </div>

        {!! Form::close() !!}
    </div>


      </div>

     </section>
     
@endsection
  