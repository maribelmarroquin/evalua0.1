<?php

namespace Evalua\Http\Controllers\ControlMaestro;

use Auth;
use Evalua\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use Session;

class DatGenMController extends Controller {

	/* Mantiene el funcionemiento del controlador dentro de la sesión */
	public function __construct() {
		$this->middleware('auth');
	}

	/* Recopila los dats del usuario de la base de datos y los envía a la direccion /datos */
	public function index(Request $request) {
		$perfil = \DB::table('maestros')
			->select('id_maes', 'nom_maes', 'apa_maes', 'ama_maes', 'users.name', 'users.email', 'users.password')
			->join('users', 'maestros.fk_users', '=', 'users.id')
			->where('fk_users', '=', Auth::user()->id)
			->get();

		if (count($perfil) == 0) {

			return view('Maestros.SesionMaes.PrincipalMaes.principalMaes')->with(['perfil' => $perfil]);
		} else {
			foreach ($perfil as $maes) {
				$resul = $maes->id_maes;
			}

			$materias = \DB::table('asignatura_maestros')
				->select('id_as_ma', 'fk_clave_asig', 'asignaturas.nom_asig', 'fk_maestros', 'seccion', 'periodo')
				->join('asignaturas', 'asignatura_maestros.fk_clave_asig', '=', 'asignaturas.clave_asig')
				->join('maestros', 'asignatura_maestros.fk_maestros', '=', 'maestros.id_maes')
				->where('fk_maestros', '=', $resul)
				->paginate(10);
			return view('Maestros.SesionMaes.PrincipalMaes.principalMaes')->with(['perfil' => $perfil, 'materias' => $materias]);
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {

		\Evalua\Models\Maestro::create([
			'nom_maes' => $request['nom_maes'],
			'apa_maes' => $request['apa_maes'],
			'ama_maes' => $request['ama_maes'],
			'fk_users' => $request['fk_users'],
		]);

		Session::flash('message-suceso', 'Datos registrados correctamente');
		return redirect::to('maestros00001/principal');
	}

	/*Recibe los datos del usuario en sesión y así como su id para modificarlos en la base de datos*/
	public function update($id, Request $request) {

		$maestro = \Evalua\Models\Maestro::find($id);
		$maestro->fill($request->all());
		$maestro->save();

		$maestro = \Evalua\Models\User::find($request->id);
		$maestro->fill($request->all());
		$maestro->save();

		Session::flash('message-suceso', 'Datos modificados correctamente');
		return redirect::to('maestros00001/principal');
	}

}