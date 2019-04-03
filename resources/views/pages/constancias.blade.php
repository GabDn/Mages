<!-- Guardado en resources/views/pages/admin.blade.php -->

@extends('layouts.principal')

@section('contenido')
  <!--Body content-->
<style>
    nav.navbar{
        background-color: #FAF8F8;
    }
</style>

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
                    <h4>Coordinación de Gestión y Vinculación</h4>
                </div>
                <div class="panel-body">

                <div class="logos col-md-12 col-center">
                	<img class="img-escudo" src="{{ asset('img/cdd.png') }}">
                	Manejo y Gestión de información del centro de docencia.</h3>
                
                </div>

                <hr>
                <h2>Constancias <span class="fa fa-file-pdf-o"</span></h2>


                    <table class="table table-hover">
                       <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
                            <div class="collapse navbar-collapse" id="menuCurso">
                     

                {{ Form::open(array('route' => 'constancias.generatePDF')) }}
                {{ Form::token()}}

                {{ Form::label('Curso de catalogo', 'Curso de Catálogo: ') }}
                {{  Form::select('curso', $cursosCatalogo) }}
                {{ Form::label('Semestre de Impartición', 'Semestre de Impartición: ')}}
                {{  Form::text('semestre') }}
                {{ Form::label('Tipo de constancia', 'Tipo de constancia: ')}}
                {{  Form::select('tipoConstancia', array(
                  'Instructores y Coordinador'=> array('A' => "Un instructor",
                  'B' => "Dos instructores",
                  'C' => "Tres instructores"),

                   'Instructores y Coordinación General'=> array('AA' => "Un instructor",
                    'BB' => "Dos instructores",
                    'CC' => "Tres instructores",
                    'U' => "UNICA"),

                      'Instructores y SAD'=> array('AAA' => "Un instructor",
                      'BBB' => "Dos instructores y SAD",
                      'D' => "SAD y Director"),
                      
                      'Instructores'=> array('E' => "Coordinación General",
                      'EE' => "Coordinador y Coordinación General",
                      'EEE' => "Coordinación General y SAD",
                      'SDI' => "SAD y Director: impartir",
                      'SDC' => "SAD y Director: coordinar",
                      'DI' => "Director: impartir",
                      'DC' => "Director: coordinar"),
                )) }}
                {{ Form::submit('Seleccionar') }}
                {{ Form::close() }}
                                                        
                    </table>
      </div>

     </section>
	 
@endsection
  

  
