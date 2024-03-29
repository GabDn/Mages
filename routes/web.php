<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');///pages/login
});



Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');

/* Rutas de Profesor */
Route::get('profesor/nuevo', "ProfesorController@nuevo")->name("profesor.nuevo");
Route::post('profesor/save', "ProfesorController@create")->name('profesor.store');
//Route::get('profesor', "ProfesorController@index")->name("profesor.consulta");
Route::get('profesor/', "ProfesorController@search")->name('profesor.consulta');
Route::get('profesor/tutores', "ProfesorController@showTutores")->name('profesor.tutores');
Route::get('profesor/cursos/{id}', "ProfesorController@cursos")->name('profesor.cursos');
Route::get('profesor/{id}', "ProfesorController@show")->name('profesor.show');
Route::get('profesor/actualizar/{id}', "ProfesorController@edit")->name('profesor.update');
Route::put('profesor/actualizar/{id}', "ProfesorController@update")->name('profesor.actualizar');
Route::get('profesor/baja/{id}', "ProfesorController@delete");

/* Rutas de Curso */
Route::get('curso/nuevo/{id}', "CursoController@nuevo")->name("curso.nuevo");
Route::post('curso/save', "CursoController@create")->name('curso.store');
Route::get('curso/{id}', "CursoController@show")->name('curso.show');
Route::get('curso', "CursoController@index")->name("curso.consulta");
Route::get('curso/busqueda', "CursoController@search")->name('curso.busqueda');
Route::post('cursos/busqueda', "CursoController@Csearch")->name('curso.Csearch');
Route::get('curso/actualizar/{id}', "CursoController@edit")->name('curso.update');
Route::get('curso/inscripcion/{id}', "CursoController@inscripcionParticipante")->name('curso.inscripcion');
Route::post('curso/inscripcion/{curso_id}/busqueda', "ProfesorController@search1")->name('profesor.consulta1');
Route::get('curso/generar-formatos/{curso}', "CursoController@GenerarFormatos")->name('curso.generar-formatos');
Route::get('curso/ver-profesores/{curso}', "CursoController@verParticipante")->name('curso.ver-participante');
Route::get('curso/baja-profesor/{id}/{curso_id}',"CursoController@bajaParticipante")->name('curso.baja-participante');
//aqui se registran ambos parametros en la tabla intermedia
Route::post('curso/registrar/{id}/{curso_id}', "CursoController@registrarParticipante")->name('curso.registrar');
Route::put('curso/actualizar/{id}', "CursoController@update")->name('curso.actualizar');
Route::get('curso/baja/{id}', "CursoController@delete");

/*Rutas de Catalogo-Curso*/
Route::get('catalogo-cursos/nuevo', "CatalogoCursosController@nuevo")->name("catalogo-cursos.nuevo");
Route::post('catalogo-cursos/save',"CatalogoCursosController@create")->name('catalogo-cursos.store');
Route::get('catalogo-cursos/{id}', "CatalogoCursosController@show")->name('catalogo-cursos.show');
Route::get('catalogo-cursos','CatalogoCursosController@search')->name("catalogo-cursos.consulta");
Route::get('catalogo-cursos/actualizar/{id}', "CatalogoCursosController@edit")->name('catalogo-cursos.update');
Route::put('catalogo-cursos/actualizar/{id}', "CatalogoCursosController@update")->name('catalogo-cursos.actualizar');
Route::get('catalogo-cursos/baja/{id}', "CatalogoCursosController@delete");

/* Rutas de Coordinacion */
Route::get('coordinacion/nuevo', "CoordinacionController@nuevo")->name("coordinacion.nuevo");
Route::post('coordinacion/save', "CoordinacionController@create")->name('coordinacion.store');
Route::get('coordinacion/{id}', "CoordinacionController@show")->name('coordinacion.show');
Route::get('coordinacion', "CoordinacionController@index")->name("coordinacion.consulta");
Route::get('coordinacion/busqueda', "CoordinacionController@search")->name('coordinacion.busqueda');
Route::get('coordinacion/actualizar/{id}', "CoordinacionController@edit")->name('coordinacion.update');
Route::put('coordinacion/actualizar/{id}', "CoordinacionController@update")->name('coordinacion.actualizar');
Route::get('coordinacion/baja/{id}', "CoordinacionController@delete");

/* Rutas de Facultad */

Route::get('facultad/nuevo', "FacultadController@nuevo")->name("facultad.nuevo");
Route::post('facultad/save', "FacultadController@create")->name('facultad.store');
Route::get('facultad/{id}', "FacultadController@show")->name('facultad.show');
Route::get('facultad', "FacultadController@index")->name("facultad.consulta");
Route::get('facultad/busqueda', "FacultadController@search")->name('facultad.busqueda');
Route::get('facultad/actualizar/{id}', "FacultadController@edit")->name('facultad.update');
Route::put('facultad/actualizar/{id}', "FacultadController@update")->name('facultad.actualizar');
Route::get('facultad/baja/{id}', "FacultadController@delete");

/* Rutas de Division */
Route::get('division/nuevo', "DivisionController@nuevo")->name("division.nuevo");
Route::post('division/save', "DivisionController@create")->name('division.store');
Route::get('division/{id}', "DivisionController@show")->name('division.show');
Route::get('division', "DivisionController@index")->name("division.consulta");
Route::get('division/busqueda', "DivisionController@search")->name('division.busqueda');
Route::get('division/actualizar/{id}', "DivisionController@edit")->name('division.update');
Route::put('division/actualizar/{id}', "DivisionController@update")->name('division.actualizar');
Route::get('division/baja/{id}', "DivisionController@delete");

/* Rutas de Carrera */
Route::get('carrera/nuevo', "CarreraController@nuevo")->name("carrera.nuevo");
Route::post('carrera/save', "CarreraController@create")->name('carrera.store');
Route::get('carrera/{id}', "CarreraController@show")->name('carrera.show');
Route::get('carrera', "CarreraController@index")->name("carrera.consulta");
Route::get('carrera/busqueda', "CarreraController@search")->name('carrera.busqueda');
Route::get('carrera/actualizar/{id}', "CarreraController@edit")->name('carrera.update');
Route::put('carrera/actualizar/{id}', "CarreraController@update")->name('carrera.actualizar');
Route::get('carrera/baja/{id}', "CarreraController@delete");

/* Rutas de Salon */
Route::get('salon/nuevo', "SalonController@nuevo")->name("salon.nuevo");
Route::post('salon/save', "SalonController@create")->name('salon.store');
Route::get('salon/{id}', "SalonController@show")->name('salon.show');
Route::get('salon', "SalonController@index")->name("salon.consulta");
Route::get('salon/busqueda', "SalonController@search")->name('salon.busqueda');
Route::get('salon/actualizar/{id}', "SalonController@edit")->name('salon.update');
Route::put('salon/actualizar/{id}', "SalonController@update")->name('salon.actualizar');
Route::get('salon/baja/{id}', "SalonController@delete");


/* Rutas de CategoriaNivel */
Route::get('categoria-nivel/nuevo', "CategoriaNivelController@nuevo")->name("categoria.nuevo");
Route::post('categoria-nivel/save', "CategoriaNivelController@create")->name('categoria.store');
Route::get('categoria-nivel', "CategoriaNivelController@index")->name("categoria.consulta");
Route::get('categoria-nivel/busqueda', "CategoriaNivelController@search")->name('categoria.busqueda');
Route::get('categoria-nivel/actualizar/{id}', "CategoriaNivelController@edit")->name('categoria.update');
Route::put('categoria-nivel/actualizar/{id}', "CategoriaNivelController@update")->name('categoria.actualizar');
Route::get('categoria-nivel/baja/{id}', "CategoriaNivelController@delete");

/* Rutas de CoordinadorGeneral */
Route::get('coordinador-general/nuevo', "CoordinadorGeneralController@nuevo")->name("coordinador-general.nuevo");
Route::post('coordinador-general/save', "CoordinadorGeneralController@create")->name('coordinador-general.store');
Route::get('coordinador-general', "CoordinadorGeneralController@index")->name("coordinador-general.consulta");
Route::get('coordinador-general/actualizar/{id}', "CoordinadorGeneralController@edit")->name('coordinador-general.update');
Route::put('coordinador-general/actualizar/{id}', "CoordinadorGeneralController@update")->name('coordinador-general.actualizar');
Route::get('coordinador-general/baja/{id}', "CoordinadorGeneralController@delete");

/* Rutas de SecretarioApoyo */
Route::get('secretario-apoyo/nuevo', "SecretarioApoyoController@nuevo")->name("secretario-apoyo.nuevo");
Route::post('secretario-apoyo/save', "SecretarioApoyoController@create")->name('secretario-apoyo.store');
Route::get('secretario-apoyo', "SecretarioApoyoController@index")->name("secretario-apoyo.consulta");
Route::get('secretario-apoyo/actualizar/{id}', "SecretarioApoyoController@edit")->name('secretario-apoyo.update');
Route::put('secretario-apoyo/actualizar/{id}', "SecretarioApoyoController@update")->name('secretario-apoyo.actualizar');
Route::get('secretario-apoyo/baja/{id}', "SecretarioApoyoController@delete");

/* Rutas PDF */
Route::get('constancias','ConstanciasController@selectType')->name('constancias.elegirTipoConstancia');
Route::post('constancias/a','ConstanciasController@generar')->name('constancias.generar');
/*
Route::get('constancias/generar/{id}/{tipoDeConstancia}','ConstanciasController@sendPDF')->name('constancias.generar');
Route::post('constancias/pdf','ConstanciasController@generatePDF')->name('constancias.generatePDF');
Route::get('directortexto','ConstanciasController@director_texto');*/

/**Rutas de Formatos */
Route::get('formatos/generar/{id}/{tipoDeConstancia}','FormatosController@sendPDF')->name('formatos.generar');
