<!-- Guardado en resources/views/layouts/principal.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/img/favicon.ico') }}" />	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Magesticd - Centro de Docencia </title>
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/bootstrap.min.css') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('public/dist/jquery.fancybox.min.css') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/font-awesome.min.css') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/admin.css') }}"/>

</head>
<body>

<div class="wrap">
  <nav class="nav-bar navbar-inverse" role="navigation">
      <div id ="top-menu" class="container-fluid active">
          <a class="navbar-brand" href="{{ URL::to('admin/') }}">Magesticd</a>
          <ul class="nav navbar-nav">        
              
              <li class="dropdown movable">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="caret"></span><span class="fa fa-2x fa-user-circle"></span></a>
                  <ul class="dropdown-menu" role="menu">
                      
                      <li><a href="#"><span class="fa fa-gear"></span>Cambiar Contraseña</a></li>
                      <li class="divider"></li>
                      <li><a href="#"><span class="fa fa-power-off"></span>Salir</a></li>
                  </ul>
              </li>
              
          </ul>
      </div>      
  </nav>
  
    <aside id="side-menu" class="aside" role="navigation">            
        <ul class="nav nav-list accordion">                    
          <li class="nav-header">
            <div class="link"><i class="fa fa-lg fa-book"></i>Cursos<i class="fa fa-chevron-down"></i></div>
            <ul class="submenu">
              <li><a href="{{ URL::to('alta-curso/') }}">Alta de curso</a></li>
              <li><a href="baja-curso.html">Baja de curso</a></li>   
              <li><a href="catalogo.html">Catalogo de cursos</a></li>
              <li><a href="inscripción.html">Inscripción de participantes</a></li>
              <li><a href="cursos-programados.html">Cursos programados</a></li>    
            </ul>
          </li>
          
          <li class="nav-header">
            <div class="link"><i class="fa fa-lg fa-graduation-cap""></i>Profesores<i class="fa fa-chevron-down"></i></div>
            <ul class="submenu">
              <li><a href="#">Alta Profesor</a></li>
              <li><a href="#">Baja Profesor</a></li>
              <li><a href="#">Consulta de profesores</a></li>
              <li><a href="#">Altas, Bajas y Cambios</a></li>
              <li><a href="#">Altas, Bajas y Cambios(Tutores)</a></li>
              <li><a href="#">Categoria y Nivel</a></li>
              <li><a href="#">Curriculum</a></li>
          
            </ul>
          </li>
          
          <li class="nav-header">
            <div class="link"><i class="fa fa-building"></i>Salones<i class="fa fa-chevron-down"></i></div>
            <ul class="submenu">
              <li><a href="#">Consulta Salones</a></li>
              <li><a href="#">Alta de Salon</a></li>
              <li><a href="#">Baja de Salon</a></li>
            </ul>
          </li>
		  
		  <li class="nav-header">
            <div class="link"><i class="fa fa-lg fa-map-marker"></i>Cordinaciones<i class="fa fa-chevron-down"></i></div>
            <ul class="submenu">
              <li><a href="#">Alta de cordinación</a></li>
               <li><a href="#">Baja de cordinación</a></li>
               <li><a href="#">Modificar cordinación</a></li>
              <li><a href="#">Cordinación general</a></li>
              <li><a href="#">Secretaria de apoyo</a></li>
            </ul>
          </li>
          
          <li class="nav-header">
            <div class="link"><i class="fa fa-lg fa-suitcase"></i>Divisiones<i class="fa fa-chevron-down"></i></div>
            <ul class="submenu">
              <li><a href="#">Alta de División</a></li>
               <li><a href="#">Baja de División</a></li>
               <li><a href="#">Modificar División</a></li>
            </ul>
          </li>
          <li class="nav-header">
            <div class="link"><i class="fa fa-lg fa-file-image-o"></i>Gráficas, Documentos y Reportes<i class="fa fa-chevron-down"></i></div>
            <ul class="submenu">
              <li><a href="#">Modificaciónes en diplomas</a></li>
              <li><a href="#">Diplomas/a></li> 
              <li><a href="#">Hojas de asistencia</a></li> 
              <li><a href="#">Cursos Solicitados</a></li>          
              <li><a href="#">Profesores, curso y Semestre</a></li>
              <li><a href="#">Profesores y curso</a></li>
              <li><a href="#">Profesores</a></li>
              <li><a href="#">Memoria estadistíca de cursos</a></li>
              <li><a href="#">Memoria estadistíca de instructores</a></li>
              <li><a href="#">Ambiente en cursos</a></li>
            </ul>
          </li>
		  
		  </ul>
  </aside>
  
  @yield('contenido')
  
    <foote class="content-inner">
    <div class="panel panel-default">
    <div class="panel-heading">
                   Hecho en México, Universidad Nacional Autónoma de México, Facultad de Ingeniería, Unidad de servicios de cómputo académico, Departamento de Investigación y Desarrollo. 
Todos los derechos reservados 2017. 
                </div>
    </div>
  </footer>
  </div> 


</div>





	<script src="{{ asset ('public/js/jquery.js') }}"></script>
	<script src="{{ asset ('public/js/admin.js') }}"></script>
	<script src="{{ asset ('public/dist/jquery.fancybox.min.js') }}"></script>

	<script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
</body>
</html>
