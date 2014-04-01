<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
    /*
	public function showWelcome()
	{
		return View::make('hello');
	}
    */
	public function index()
	{
		return View::make('index');
	} 
	public function planes()
	{
		return View::make('planes');
	} 
	public function clientes()
	{
		return View::make('clientes');
	}
	public function beneficios()
	{
		return View::make('beneficios');
	}
	public function preguntas()
	{
		return View::make('preguntas');
	}
	public function pagos()
	{
		return View::make('pagos');
	}
	public function contacto()
	{
		return View::make('contacto');
	}

}