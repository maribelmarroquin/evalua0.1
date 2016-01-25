<?php

namespace Evalua\Http\Controllers;

use Auth;
use Evalua\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use Session;

class RegisMatAlumController extends Controller {

	public function __construct() {
		$this->middleware('auth');
	}

	public function store(Request $request) {
		$id_alumno = \DB::table('alumnos')
			->select('id_alumno')
			->where('fk_users', '=', Auth::user()->id)
			->get();

		foreach ($id_alumno as $alumno) {

		}

		\Evalua\Models\AsignaturaAlumno::create([
			'fk_alumno' => $alumno->id_alumno,
			'fk_as_ma' => $request->id_as_ma,
		]);

		Session::flash('suceso', 'Datos registrados correctamente');
		return redirect::to('datos');

	}

}
