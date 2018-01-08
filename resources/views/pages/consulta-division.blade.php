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
                    <h3>Divisiones</h3>



                    </span>
                </div>
            </div>
            <div class="panel-body">

                <table class="col-md-12">
                    <tr>
                        <th>Nombre</th>
                        <th></th>
                    </tr>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->nombre }} </td>

                            <td><a href="{{ URL::to('division/actualizar', $user->id) }}" class="btn btn-info">Modificar dato</a>
                                <a href="{{ URL::to('division/baja', $user->id) }}" class="btn btn-danger">Dar de baja</a></td>
                        </tr>
                    @endforeach
                </table>




            </div>

        </section>

@endsection

