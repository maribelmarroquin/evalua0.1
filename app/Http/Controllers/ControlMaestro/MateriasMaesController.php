<?php

namespace Evalua\Http\Controllers\ControlMaestro;

use Evalua\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use Session;

class MateriasMaesController extends Controller {

	/* Mantiene el funcionemiento del controlador dentro de la sesión */
	public function __construct() {
		$this->middleware('auth');
	}

	public function store(Request $request) {

		$materias = \DB::table('asignaturas')
			->select('clave_asig')
			->where('clave_asig', '=', $request['clave_asig'])
			->get();
		if (count($materias) == 0) {
			\Evalua\Models\Asignatura::create([
				'clave_asig' => $request['clave_asig'],
				'nom_asig' => $request['nom_asig'],
			]);

			\Evalua\Models\AsignaturaMaestro::create([
				'fk_maestros' => $request['fk_maestros'],
				'fk_clave_asig' => $request['clave_asig'],
				'seccion' => $request['seccion'],
				'periodo' => $request['periodo'],
			]);

			Session::flash('message-suceso', 'Asignaura registrada correctamente.');
			return redirect::to('maestros00001/principal#regMatM');
		} else {
			Session::flash('message-error', 'La Asignatura ya ha sido registrada con anterioridad.');
			return redirect::to('maestros00001/principal#regMatM');
		}

	}

	public function update($id, Request $request) {
		$asig_maes = \Evalua\Models\AsignaturaMaestro::find($id);
		$asig_maes->fill($request->all());
		$asig_maes->save();

		$relacion = $request->fk_clave_asig;

		$materia = \Evalua\Models\Asignatura::find($relacion);
		$materia->nom_asig = $request->nom_asig;
		$materia->save();

		Session::flash('message-suceso', 'Datos modificados correctamente');
		return redirect::to('maestros00001/principal#regMatM');
	}

	public function destroy($id) {
		Session::flash('message-error', 'Materia eliminada correctamente');
		\Evalua\Models\Asignatura::destroy($id);
		return redirect::to('maestros00001/principal#regMatM');
	}

}