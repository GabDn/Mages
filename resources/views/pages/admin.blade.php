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
                    <h3>Bienvenido @usuario</h3>
                    <h4>Cordinación de Gestión y Vinculación</h4>
                </div>
                <div class="panel-body">

                <div class="logos col-md-12 col-center">
                	<img class="img-escudo" src="{{ asset('img/cdd.png') }}">
                	Manejo y Gestión de información del centro de docencia.</h3>
                
                </div>

                <hr>
                <h2>Cumpleaños <span class="fa fa-birthday-cake""></span></h2>

                <table class="table table-hover">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Procedencia</th>
        <th>Cumpleaños</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Luis Ignacio</td>
        <td>DIE</td>
        <td>15-06</td>
      </tr>
      <tr>
        <td>María</td>
        <td>DCSYH</td>
        <td>15-06</td>
      </tr>
      <tr>
        <td>Julio</td>
        <td>SECRETARIAS</td>
        <td>15-06</td>
      </tr>
    </tbody>
  </table>
      </div>

     </section>
	 
@endsection
  
