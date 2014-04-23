<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*Route::get('/', function()
{
	return View::make('hello');
});
*/
Route::get('/','HomeController@index');
Route::get('planes','HomeController@planes');
Route::get('clientes','HomeController@clientes');
Route::get('beneficios','HomeController@beneficios');
Route::get('preguntas','HomeController@preguntas');
Route::get('pagos','HomeController@pagos');
Route::get('contacto','HomeController@contacto');


/**** FORMULARIO DEMO Y PLANES ****/

Route::get('formulariodemo','HomeController@formulariodemo');
Route::get('adquirir','HomeController@adquirir');


/**** INGRESAR A MI TIENDA****/

Route::get('ingresar', 'HomeController@ingresar');
Route::get('recordar', 'HomeController@recordar');

/****USUARIOS MI TIENDA****/

Route::get('datos', 'HomeController@datos');
Route::get('tiendas', 'HomeController@tiendas');
Route::get('tutoriales', 'HomeController@tutoriales');
Route::get('ayuda', 'HomeController@ayuda');

