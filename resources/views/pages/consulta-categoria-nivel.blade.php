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
                <h3>Categoria y Nivel</h3>

            </div>
        </div>
        <form id="cursoform" class="form-horizontal" method="POST" action="{{ route('categoria.store') }}">
                        {{ csrf_field() }}



                        <div class="form-group{{ $errors->has('categoria') ? ' has-error' : '' }}">
                            <label for="categoria" class="col-md-4 control-label">Nombre de la Categoria o Nivel</label>

                            <div class="col-md-6">
                                <input id="categoria" type="text" class="form-control" name="categoria" value="{{ old('catgeoria') }}"  >

                                @if ($errors->has('categoria'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('categoria') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('abreviatura') ? ' has-error' : '' }}">
                            <label for="abreviatura" class="col-md-4 control-label">Abreviatura de la Categoria o Nivel</label>

                            <div class="col-md-6">
                                <input id="abreviatura" type="text" class="form-control" name="abreviatura" value="{{ old('abreviatura') }}"  >

                                @if ($errors->has('abreviatura'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('abreviatura') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Crear Categoria
                                </button>
                            </div>
                        </div>
                    </form>
            <div class="panel-body">
                <table class="col-md-12">
                    <tr>
                        <th>Categoria</th>
                        <th>Abreviatura</th>
                    </tr>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->categoria }} </td>
                            <td>{{ $user->abreviatura}}</td>
                            <td><a href="{{ URL::to('categoria-nivel/actualizar', $user->id) }}" class="btn btn-info">Editar</a>
                                <a href="{{ URL::to('categoria-nivel/baja', $user->id) }}" class="btn btn-danger">Eliminar</a></td>
                        </tr>
                    @endforeach
                </table>




            </div>

    </section>

@endsection