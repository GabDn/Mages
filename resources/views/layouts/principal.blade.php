<!-- Guardado en resources/views/layouts/principal.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/img/favicon.ico') }}" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Magesticd - Centro de Docencia </title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/jquery.fancybox.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/admin.css') }}"/>

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
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Salir
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
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
                    <li class="dropdown-menu-right"><a href="{{ route('curso.nuevo') }}">Alta de curso</a></li>
                    <li><a href="{{ route('curso.consulta') }}">Catalogo de cursos</a></li>
                    <li><a href="inscripción.html">Inscripción de participantes</a></li>
                    <li><a href="cursos-programados.html">Cursos programados</a></li>
                </ul>
            </li>

            <li class="nav-header">
                <div class="link"><i class="fa fa-lg fa-graduation-cap"></i>Profesores<i class="fa fa-chevron-down"></i></div>
                <ul class="submenu">
                    <li><a href="{{ route('profesor.nuevo') }}">Alta Profesor</a></li>
                    <li><a href="{{ route('profesor.consulta') }}">Consulta de profesores</a></li>
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
                <div class="link"><i class="fa fa-lg fa-map-marker"></i>Coordinaciones<i class="fa fa-chevron-down"></i></div>
                <ul class="submenu">
                    <li><a href="{{route('coordinacion.nuevo')}}">Alta de coordinación</a></li>
                    <li><a href="{{route('coordinacion.consulta')}}">Modificar coordinación</a></li>
                    <li><a href="#">Coordinación general</a></li>
                    <li><a href="#">Secretaria de apoyo</a></li>
                </ul>
            </li>

            <li class="nav-header">
                <div class="link"><i class="fa fa-lg fa-suitcase"></i>Divisiones<i class="fa fa-chevron-down"></i></div>
                <ul class="submenu">
                    <li><a href="{{route('division.nuevo')}}">Alta de División</a></li>
                    <li><a href="#">Baja de División</a></li>
                    <li><a href="{{route('division.consulta')}}">Modificar División</a></li>
                </ul>
            </li>
            <li class="nav-header">
                <div class="link"><i class="fa fa-lg fa-file-image-o"></i>Gráficas, Documentos y Reportes<i class="fa fa-chevron-down"></i></div>
                <ul class="submenu">
                    <li><a href="#">Modificaciónes en diplomas</a></li>
                    <li><a href="#">Diplomas</a></li>
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

    <footer class="content-inner">
        <div class="panel panel-default">
            <div class="panel-heading">
                Hecho en México, Universidad Nacional Autónoma de México, Facultad de Ingeniería, Unidad de servicios de cómputo académico, Departamento de Investigación y Desarrollo.
                Todos los derechos reservados 2017.
            </div>
        </div>
    </footer>
</div>


</div>





<script src="{{ asset ('/js/jquery.js') }}"></script>
<script src="{{ asset ('/js/admin.js') }}"></script>
<script src="{{ asset ('/dist/jquery.fancybox.min.js') }}"></script>

<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
</body>
</html>
