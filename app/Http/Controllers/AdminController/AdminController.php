<?php

namespace Evalua\Http\Controllers\AdminController;

use Auth;
use Evalua\Http\Controllers\Controller;

class AdminController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function __construct() {
		$this->middleware('auth');
	}

	public function index() {

		$perfil = \DB::table('users')
			->select('name', 'email')
			->where('id', '=', Auth::user()->id)
			->get();

		$todos = \DB::table('users')
			->select('id', 'name', 'email', 'password', 'tipo')
			->where('id', '<>', Auth::user()->id)
			->get();

		return view('Administrador.Contenido.bienvenidoAdmin')->with(['perfil' => $perfil, 'todos' => $todos]);
	}

}