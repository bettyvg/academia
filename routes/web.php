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
//URL::forceRootUrl('http://fojalcredit.fojal.mx/fojal_academia');

Route::get('/', 'HomeController@inicio')->name('inicio');
Route::get('inicio2', 'HomeController@inicio2')->name('inicio2');

Route::get('alumnos', 'HomeController@alumnos')->name('alumnos');
//Route::post('usuarios', 'HomeController@usuarios')->name('usuarios');
//Route::get('usuarios', 'HomeController@usuarios')->name('usuarios');

//Registro Platicas Informativas
Route::get('registroplatica', 'RegistroController@vinculacion')->name('registroplatica');
Route::post('registroplatica', 'RegistroController@registro')->name('registroplatica');
Route::get('edit_registrop/{id}', 'RegistroController@edit')->name('edit_registrop');
Route::post('edit_registrop/{id}', 'RegistroController@update')->name('edit_registrop.update');


Route::get('testubica', 'HomeController@testubica')->name('testubica');
Route::get('calendario', 'HomeController@calendario')->name('calendario');
Route::get('cursos', 'HomeController@cursos')->name('cursos');
Route::get('cognos.reporte_cognos', 'HomeController@reportecognos')->name('reportecognos');

//Catalagos del sistema
Route::post('temas', 'temasController@registrotemas')->name('temas');
Route::get('temas', 'temasController@temas')->name('temas');
Route::get('editar_tema/{id}', 'temasController@edit')->name('editar_tema');
Route::post('editar_tema/{id}', 'temasController@update')->name('editar_tema');
Route::PATCH('delete_tema/{id}', 'temasController@delete')->name('delete_tema');


//Cat_perfil
Route::get('perfiles', 'PerfilesController@index')->name('perfiles');
Route::post('perfiles', 'PerfilesController@store')->name('perfiles');
Route::get('editar_perfil/{id}', 'PerfilesController@edit')->name('editar_perfil');
Route::post('editar_perfil/{id}', 'PerfilesController@update')->name('editar_perfil');
Route::PATCH('delete_perfil/{id}', 'PerfilesController@delete')->name('delete_perfil');

//Cat_instituciones
Route::get('instituciones', 'InstitucionesController@index')->name('instituciones');
Route::post('instituciones', 'InstitucionesController@index')->name('instituciones');
Route::post('instituciones', 'InstitucionesController@store')->name('instituciones.store');
Route::get('editar_institucion/{id}', 'InstitucionesController@edit')->name('editar_instituciones');
Route::post('editar_institucion/{id}', 'InstitucionesController@update')->name('editar_instituciones');
Route::PATCH('delete_institucion/{id}', 'InstitucionesController@delete')->name('delete_instituciones');

/*Route::resource('perfiles', 'PerfilesController');
Route::PATCH('delete_perfiles/{id}', 'PerfilesController@delete')->name('perfiles.delete');*/


Route::get('capacitores', 'HomeController@capacitadores')->name('capacitores');
Route::resource('cat_capacitadores', 'CapacitadoresController');
Route::PATCH('delete_capacitador/{id}', 'CapacitadoresController@delete_capacitador')->name('delete_capacitador');

//Evaluación a Ejecutivos
//Route::resource('evaluacionejecutivos', 'evaluacionejecutivosv1Controller');
Route::get('evaluacionejecutivos', 'evaluacionejecutivosv1Controller@index')->name('evaluacionejecutivos');
Route::post('evaluacionejecutivos', 'evaluacionejecutivosv1Controller@store')->name('evaluacionejecutivos');
Route::get('editar_evaluacionejecutivos/{id}', 'evaluacionejecutivosv1Controller@edit')->name('editar_perfil');
Route::post('editar_evaluacionejecutivos/{id}', 'evaluacionejecutivosv1Controller@update')->name('editar_perfil');


Route::get('cursodetalle/{id}', 'cursoDetalleController@index')->name('videocurso');

//Cat_ejecutivos
Route::get('ejecutivos', 'EjecutivosController@ejecutivos')->name('ejecutivos');
Route::post('crear_ejecutivos', 'EjecutivosController@ejecutivoscreate')->name('crear_ejecutivos');
Route::get('editar_ejecutivo/{id}', 'EjecutivosController@edit')->name('editar_ejecutivos');
Route::post('editar_ejecutivo/{id}', 'EjecutivosController@update')->name('editar_ejecutivos.update');
Route::PATCH('delete_ejecutivos/{id}', 'EjecutivosController@delete_ejecutivos')->name('delete_ejecutivos');

Route::patch('delete/{id}', 'CapacitadoresController@delete')->name('delete_capacitadores');

//Route::get('perfiles', 'PerfilesController@perfiles')->name('perfiles');
Route::get('puestos', 'PuestosController@puestos')->name('puestos');


Route::get('evaluacionplaticainfo', 'EvaluacionController@evaluacionplatica')->name('evaluacionplaticainfo');
Route::post('evaluacionplaticainfo', 'EvaluacionController@evaluacionplatica')->name('evaluacionplaticainfo');
//Route::post('evaluacionplaticainfo', 'EvaluacionController@evaluacion')->name('evaluacionplaticainfo');

Route::post('EvaluacionCapacitadores', 'EvalCapacitadorController@EvaluacionCapacitadores')->name('EvaluacionCapacitadores');
Route::get('EvaluacionCapacitadores', 'EvalCapacitadorController@inicioevaluacion')->name('EvaluacionCapacitadores');
Route::get('BuscarEvaCapacitadores', 'BuscarEvalCapacitadorController@Capacitadorbusqueda')->name('BuscarEvaCapacitadores');
Route::post('BuscarEvaCapacitadores', 'BuscarEvalCapacitadorController@Capacitadorbusqueda')->name('BuscarEvaCapacitadores');


/* Rutas para modulo de usuarios */
Route::get('login', 'UsuariosController@login' )->name('login');
Route::post('login', 'UsuariosController@login');

Route::post('usuarios_registro', 'UsuariosController@registro')->name('usuarios_registro');
//Route::post('usuarios', 'UsuariosController@registro')->name('usuarios');
Route::get('usuarios', 'UsuariosController@index')->name('usuarios');

Route::get('edit_user/{id}', 'UsuariosController@edit')->name('edit_user');
Route::post('edit_user/{id}', 'UsuariosController@edit')->name('edit_user');

Route::post('delete_user/{id}', 'UsuariosController@delete_user')->name('delete_user');

Route::post('get_puesto/{id}', 'UsuariosController@get_puesto');
Route::get('signout', 'UsuariosController@signout' )->name('signout');
Route::get('registro', 'UsuariosController@registro' )->name('registro');

/*Route::get('nuevoregistro', 'NuevoUsuariosController@registro' )->name('nuevoregistro');
Route::post('nuevoregistro', 'NuevoUsuariosController@registro' )->name('nuevoregistro');
Route::post('nuevoregistro', 'NuevoUsuariosController@login' )->name('nuevoregistro');*/

/*Nuevo usuario*/
Route::get('nuevoregistro', 'NuevoUsuariosController@registro' )->name('nuevoregistro');
Route::post('nuevoregistro', 'NuevoUsuariosController@registro' )->name('nuevoregistro');

/*Registro WEB*/
Route::get('nuevoregistro2', 'registrowebController@index' )->name('nuevoregistro2');
Route::post('nuevoregistro2', 'registrowebController@create' )->name('nuevoregistro2');
Route::post('get_colonia/{id}', 'registrowebController@get_colonia');
Route::post('get_municipio/{id}', 'registrowebController@get_municipio');
Route::GET('get_cp/{id}', 'registrowebController@get_cp');

/*Registro admin*/
Route::get('registro_admin', 'registro_adminController@index' )->name('registro_admin');
Route::post('registro_admin', 'registro_adminController@create' )->name('registro_admin');
Route::get('edit_registro_admin/{id}', 'registro_adminController@edit')->name('edit_registro_admin');
Route::post('edit_registro_admin/{id}', 'registro_adminController@update')->name('edit_registro_admin.update');
Route::get('get_actividad/{id}', 'registro_adminController@get_actividad')->name('get_actividad');
Route::get('get_act_empresarial/{id}', 'registro_adminController@get_actividad_empresarial')->name('get_actividad_empresarial');
Route::get('get_region/{id}', 'registro_adminController@get_region')->name('get_region');

Route::post('registro', 'UsuariosController@registro' )->name('registro_post');
Route::get('mostrar-usuarios', 'UsuariosController@mostrar_usuarios' )->name('mostrar-usuarios');
Route::get('test', 'HomeController@test' )->name('test');


/* Cursos */

Route::post('cursos', 'CursosController@cursos' )->name('cursos');
Route::get('/get_curso/{id}', 'CursosController@get_curso' )->name('get_cursos');

Route::get('cursos_online', 'HomeController@cursos_online')->name('cursos_online');
Route::get('miscursos', 'HomeController@miscursos')->name('miscursos');
Route::post('cursos_online', 'CursosOnlineController@cursos_online' )->name('cursos_online');
Route::post('cursodetalle/guardar_minuto', 'CursosOnlineController@guardar_minuto')->name('guardar_minuto');
Route::post('guardar_inscripcion', 'CursosOnlineController@guardar_inscripcion');
Route::get('get_cursoonline/{id}', 'CursosOnlineController@get_cursoonline' )->name('get_cursoonline');

/*Examenes*/

Route::get('inicio_examen', 'ExamenController@index')->name('inicio_examen');
Route::get('examenes/{id}', 'ExamenController@preguntas')->name('examenes');
Route::get('fin_examen', 'ExamenController@fin')->name('fin_examen');
Route::get('/get_examenes/{id}', 'ExamenController@get_examenes' )->name('get_examenes');

/*Ruta para imprimir en pdf*/
Route::name('print')->get('/ejemplo', 'GeneradorController@imprimir');
Route::get('/ejemplo/{id}', 'GeneradorController@imprimir');

/*Correo prueba*/
Route::get('enviar_correo', 'registrowebController@pruebacorreo')->name('enviar_correo');