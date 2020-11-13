<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */
/*Route::resource('pruebas', 'QueryAlumnoController');*/

/*--------------------------------------------------*/

/* Comienzo de Rutas para Usuario ALUMNO */

Route::resource('/', 'AlumnoController');
Route::resource('regmat', 'RegisMatAlumController');
/*Controla los datos de perfil del usuario en sesión*/
Route::resource('datos', 'DatosController');
Route::resource('log', 'LogController');
Route::get('logout', 'LogController@logout');

/* Fin de Rutas para Usuario alumno */

/*--------------------------------------------------*/

/* Comienzo de Rutas para Usuario MAESTRO */

Route::group(['prefix' => 'maestros00001'], function () {
	Route::resource('inicio', 'ControlMaestro\PrincipalMaestroController');

	Route::resource('sesion', 'ControlMaestro\LogMController');
	Route::get('salir', 'ControlMaestro\LogMController@logout');
	Route::resource('principal', 'ControlMaestro\DatGenMController');
	Route::resource('registrarMaterias', 'ControlMaestro\MateriasMaesController');
	Route::resource('temas', 'ControlMaestro\TemasController');
	Route::resource('editarTemas', 'ControlMaestro\GetTemasController');
	Route::resource('preguntas', 'ControlMaestro\PreguntasController');
	Route::resource('generador', 'ControlMaestro\GeneradorEvaController');
	Route::resource('generaAbierto', 'ControlMaestro\EvaAbiertoController');
	Route::resource('generaRel', 'ControlMaestro\EvaRelController');
	Route::resource('alumnos', 'ControlMaestro\AlumnosMController');
	Route::resource('cambio', 'ControlMaestro\CambioConMController');
});
/* Fin de Rutas para Usuario MAESTRO */

Route::group(['prefix' => 'admin001002'], function () {

	Route::resource('inicio', 'AdminController\PrincipalAdminController');
	Route::get('inicio/registro', 'AdminController\PrincipalAdminController@show');
	Route::resource('login', 'AdminController\LogueoAdminController');
	Route::resource('principal', 'AdminController\AdminController');

});

Route::resource('contacto', 'MailController');
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');