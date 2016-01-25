<?php

namespace Evalua\Http\Controllers;

use Auth;
use Evalua\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use Session;

class DatosController extends Controller {

	/* Mantiene el funcionemiento del controlador dentro de la sesión */
	public function __construct() {
		$this->middleware('auth');
	}

	/* Recopila los dats del usuario de la base de datos y los envía a la direccion /datos */
	public function index() {

		$perfil = \DB::table('alumnos')
			->select('id_alumno', 'nom_alumno', 'apa_alumno', 'ama_alumno', 'sem_alumno', 'users.name', 'users.email')
			->join('users', 'alumnos.fk_users', '=', 'users.id')
			->where('fk_users', '=', Auth::user()->id)
			->get();

		$asig_alum = \DB::table('asignatura_alumnos')
			->select('fk_as_ma')
			->join('alumnos', 'asignatura_alumnos.fk_alumno', '=', 'alumnos.id_alumno')
			->where('fk_users', '=', Auth::user()->id)
			->get();

		foreach ($asig_alum as $as_al) {
			$asig_maes = \DB::table('asignatura_maestros')
				->select('fk_clave_asig')
				->where('id_as_ma', '=', $as_al->fk_as_ma)
				->get();
		}

		foreach ($asig_maes as $as_ma) {
			$asig = \DB::table('asignaturas')
				->select('clave_asig', 'nom_asig')
				->where('clave_asig', '=', $as_ma->fk_clave_asig)
				->get();
		}

		$listaAsig = \Evalua\Models\Asignatura::GroupBy('nom_asig')
			->lists('nom_asig', 'clave_asig');
		$listaSeccion = \Evalua\Models\AsignaturaMaestro::GroupBy('seccion')
			->lists('seccion', 'id_as_ma');

		return view('Alumnos.SesionAlum.datPerfil.datos')->with(['perfil' => $perfil, 'listaAsig' => $listaAsig, 'listaSeccion' => $listaSeccion, 'asig' => $asig]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {

		\Evalua\Models\Alumno::create([
			'nom_alumno' => $request['nom_alumno'],
			'apa_alumno' => $request['apa_alumno'],
			'ama_alumno' => $request['ama_alumno'],
			'sem_alumno' => $request['sem_alumno'],
			'fk_users' => $request['fk_users'],
		]);

		Session::flash('message', 'Datos registrados correctamente');
		return redirect::to('datos');
	}

	/*Recibe los datos del usuario en sesión y así como su id para modificarlos en la base de datos*/
	public function update($id_alumno, Request $request) {

		$alumno = \Evalua\Models\Alumno::find($id_alumno);
		$alumno->fill($request->all());
		$alumno->save();

		Session::flash('suceso', 'Datos modificados correctamente');
		return redirect::to('datos');
	}

	public function destroy($clave_asig) {

		$asig_maes = \DB::table('asignatura_maestros')
			->select('id_as_ma')
			->where('fk_clave_asig', '=', $clave_asig)
			->get();

		foreach ($asig_maes as $as_ma) {
		}

		$id_as_al = \DB::table('asignatura_alumnos')
			->select('id_as_al')
			->where('fk_as_ma', '=', $as_ma->id_as_ma)
			->get();

		foreach ($id_as_al as $as_al) {
		}

		Session::flash('error', 'Materia eliminada correctamente');
		\Evalua\Models\AsignaturaAlumno::destroy($as_al->id_as_al);
		return redirect::to('datos');
	}
}