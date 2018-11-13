<?php namespace GestorImagenes\Http\Controllers;

class AlbumController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		return 'mostrando Albumes del usuario';
	}

	/**
	 *Show the application dashboard to the user.
	 *
	 * @return Response
	 */

	public function getCrearAlbum(){
		return 'formulario de crear Albumes';
	}

	public function postCrearAlbum(){
		return 'almacenando album';
	}

	public function getActualizarAlbum(){
		return 'formulario de actualizar albumes';
	}

	public function postActualizarAlbum(){
		return 'actualizar album';
	}

	public function getEliminarAlbum(){
		return 'formulario de eliminar album';
	}

	public function postEliminarAlbum(){
		return 'eliminando album';
	}

	public function missionMethod($parameters=array()){
		abort(404);
	}
	
}