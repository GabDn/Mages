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
                    <h3>Alta Curso para catalogo</h3>
                    <h4>Cordinación de Gestión y Vinculación</h4>
                </div>
        </div>
                <div class="panel-body">




                    <form id="cursoform" class="form-horizontal" method="POST" action="{{ route('curso.store') }}">
                        {{ csrf_field() }}

                     

                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                            <label for="nombre" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}"  >

                                @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('tipo_curso_diploma') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Tipo de Diploma</label>

                            <div class="col-md-6">
                                <input id="tipo_curso_diploma" type="text" class="form-control" name="tipo_curso_diploma" value="{{ old('tipo_curso_diploma') }}" >

                                @if ($errors->has('tipo_curso_diploma'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tipo_curso_diploma') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('tipo') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Tipo</label>

                            <div class="col-md-6">
                                <input id="tipo" type="text" class="form-control" name="tipo" value="{{ old('tipo') }}" >

                                @if ($errors->has('tipo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tipo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>     
                        

                                                 <div class="form-group{{ $errors->has('tipo_difusion') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Difusion </label>

                            <div class="col-md-6">
                                <input id="tipo_difusion" type="text" class="form-control" name="tipo_difusion" value="{{ old('tipo_difusion') }}" >

                                @if ($errors->has('tipo_difusion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tipo_difusion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>    


                                                 <div class="form-group{{ $errors->has('objetivo') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Objetivo</label>

                            <div class="col-md-6">
                                <input id="objetivo" type="text" class="form-control" name="objetivo" value="{{ old('objetivo') }}" >

                                @if ($errors->has('objetivo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('objetivo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>    

                                                 <div class="form-group{{ $errors->has('contenido') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Contenido</label>

                            <div class="col-md-6">
                                <input id="contenido" type="text" class="form-control" name="contenido" value="{{ old('contenido') }}" >

                                @if ($errors->has('contenido'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contenido') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>    

                             <div class="form-group{{ $errors->has('presentación') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Presentación</label>

                            <div class="col-md-6">
                                <input id="presentación" type="text" class="form-control" name="presentación" value="{{ old('presentación') }}" >

                                @if ($errors->has('presentación'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('presentación') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>    



            
                        <div class="form-group{{ $errors->has('sintesis') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Sintesis</label>

                            <div class="col-md-6">
                                <input id="sintesis" type="text" class="form-control" name="sintesis" value="{{ old('sintesis') }}" >

                                @if ($errors->has('sintesis'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sintesis') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  


                        <div class="form-group{{ $errors->has('dirigido_a') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Dirigido a</label>

                            <div class="col-md-6">
                                <input id="dirigido_a" type="text" class="form-control" name="dirigido_a" value="{{ old('dirigido_a') }}" >

                                @if ($errors->has('dirigido_a'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dirigido_a') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>      


                        <div class="form-group{{ $errors->has('metodologia') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Metodologia</label>

                            <div class="col-md-6">
                                <input id="metodologia" type="text" class="form-control" name="metodologia" value="{{ old('metodologia') }}" >

                                @if ($errors->has('metodologia'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('metodologia') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 


                        <div class="form-group{{ $errors->has('acreditacion') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Acreditacion</label>

                            <div class="col-md-6">
                                <input id="acreditacion" type="text" class="form-control" name="acreditacion" value="{{ old('acreditacion') }}" >

                                @if ($errors->has('acreditacion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('acreditacion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>   


                        <div class="form-group{{ $errors->has('cobro') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Cobro</label>

                            <div class="col-md-6">
                                <input id="cobro" type="text" class="form-control" name="cobro" value="{{ old('cobro') }}" >

                                @if ($errors->has('cobro'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cobro') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>   


                       
                        <div class="form-group{{ $errors->has('bibliografia') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Semblanza Corta</label>

                            <div class="col-md-6">
                                <input id="bibliografia" type="text" class="form-control" name="bibliografia" value="{{ old('bibliografia') }}" >

                                @if ($errors->has('bibliografia'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bibliografia') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  


                        <div class="form-group{{ $errors->has('antecedentes') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Antecedentes</label>

                            <div class="col-md-6">
                                <input id="antecedentes" type="text" class="form-control" name="antecedentes" value="{{ old('antecedentes') }}" >

                                @if ($errors->has('antecedentes'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('antecedentes') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  

                        
                        <div class="form-group{{ $errors->has('consecuentes') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Consecuentes</label>

                            <div class="col-md-6">
                                <input id="consecuentes" type="text" class="form-control" name="consecuentes" value="{{ old('consecuentes') }}" >

                                @if ($errors->has('consecuentes'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('consecuentes') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>     

                         <div class="form-group{{ $errors->has('coordinacion_id') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Coordinación</label>

                            <div class="col-md-6">
                                <select name="coordinacion_id" form="cursoform">
                                @foreach($users as $user)

                                    <option value="{{ $user->id }} "> {{ $user->nombre_coordinacion }} </option>

                                @endforeach
                                </select>





                                @if ($errors->has('coordinacion_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('coordinacion_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Crear
                                </button>
                            </div>
                            
                        </div>
                    </form>
      </div>

     </section>
     
@endsection
  
