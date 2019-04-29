
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
                <h3>Generar formatos {{$curso->getNombreCurso()}}</h3>
            </div>
            <div class="panel-body">

                <table class="col-md-12">
                    <tr>
                        <th>Formatos</th>
                        <th>Listas</th>
                    </tr>
                        <tr>
                            <td><a href="{{ route('formatos.generar',[$curso->id,'A']) }}" class="btn btn-success">Hoja de Inscripción</a></td>
                            <td><a href="###" class="btn btn-success">...</a></td>
</td>

                        </tr>
                </table>
            </div>
    </section>
@endsection
