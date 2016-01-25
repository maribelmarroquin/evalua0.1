<?php

namespace Evalua\Http\Controllers\ControlMaestro;

use Evalua\Http\Controllers\Controller;

class GeneradorEvaController extends Controller {
	public function __construct() {
		$this->middleware('auth');
	}

	public function show($clave_asig) {

		$asig = \DB::table('asignaturas')
			->select('clave_asig', 'nom_asig')
			->where('clave_asig', '=', $clave_asig)
			->get();

		$unidad = \DB::table('temas')
			->select('unidad', 'nom_uni')
			->where('fk_asig', '=', $clave_asig)
			->groupBy('unidad')
			->paginate(10);

		return view('Maestros.SesionMaes.PrincipalMaes.ContPestPrincipalM.ContSubPestPrincipalM.PestañasGenEvaM.genEva')->with(['asig' => $asig, 'unidad' => $unidad]);
	}

}