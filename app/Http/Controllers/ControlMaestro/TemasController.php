<?php

namespace Evalua\Http\Controllers\ControlMaestro;

use Evalua\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use Session;

class TemasController extends Controller {

	/* Mantiene el funcionemiento del controlador dentro de la sesión */
	public function __construct() {
		$this->middleware('auth');
	}

	public function show($clave_asig, Request $request) {
		$asig = \DB::table('asignaturas')
			->select('clave_asig', 'nom_asig')
			->where('clave_asig', '=', $clave_asig)
			->get();
		if ($request->search != "") {
			$temas = \DB::table('temas')
				->select('id_temas', 'tema', 'unidad', 'nom_uni', 'fk_asig')
				->where(['fk_asig' => $clave_asig, 'tema' => $request->search])
				->orWhere(['fk_asig' => $clave_asig, 'unidad' => $request->search])
				->orWhere(['fk_asig' => $clave_asig, 'nom_uni' => $request->search])
				->paginate(10);
		} else {
			$temas = \DB::table('temas')
				->select('id_temas', 'tema', 'unidad', 'nom_uni', 'fk_asig')
				->where('fk_asig', '=', $clave_asig)
				->paginate(10);
		}

		$listaTemas = \Evalua\Models\Tema::where('fk_asig', $clave_asig)
			->lists('tema', 'id_temas');

		return view('Maestros.SesionMaes.PrincipalMaes.ContPestPrincipalM.ContSubPestPrincipalM.PestañasBancoReacM.temasM')->with(['asig' => $asig, 'temas' => $temas, 'listaTemas' => $listaTemas]);
	}

	public function store(Request $request) {
		$clave_asig = $request['fk_asig'];

		\Evalua\Models\Tema::create([
			'tema' => $request['tema'],
			'unidad' => $request['unidad'],
			'nom_uni' => $request['nom_uni'],
			'fk_asig' => $request['fk_asig'],
		]);
		Session::flash('message-suceso', 'Tema registrado correctamente');
		return redirect()->action('ControlMaestro\TemasController@show', [$clave_asig]);
	}

	public function destroy($id, Request $request) {
		$clave_asig = $request['clave_asig'];

		Session::flash('message-error', 'Materia eliminada correctamente');
		\Evalua\Models\Tema::destroy($id);
		return redirect()->action('ControlMaestro\TemasController@show', [$clave_asig]);
	}

}