<?php

namespace Evalua\Http\Controllers\ControlMaestro;

use Evalua\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EvaAbiertoController extends Controller {

	public function __construct() {
		$this->middleware('auth');
	}

	public function show(Request $request, $clave_asig) {

		$preg = \DB::table('preguntas')
			->select('id_preg', 'preg', 'resp')
			->join('temas', 'preguntas.fk_temas', '=', 'temas.id_temas')
			->where(['temas.unidad' => $request->unidad, 'fk_asig' => $clave_asig])
			->orderBy(\DB::raw('RAND()'))
			->paginate($request->cantidad);

		$unidad = \DB::table('temas')
			->select('nom_uni', 'unidad')
			->where('unidad', '=', $request->unidad)
			->groupBy('unidad')
			->get();

		$se_pe = \DB::table('asignatura_maestros')
			->select('seccion', 'periodo', 'fk_maestros')
			->where('fk_clave_asig', '=', $clave_asig)
			->get();

		foreach ($se_pe as $sec_per) {
		}
		$maestro = \DB::table('maestros')
			->select('nom_maes', 'apa_maes', 'ama_maes')
			->where('id_maes', '=', $sec_per->fk_maestros)
			->get();

		$asig = \DB::table('asignaturas')
			->select('nom_asig')
			->where('clave_asig', '=', $clave_asig)
			->get();

		$c = 0;
		return view('Maestros.SesionMaes.PrincipalMaes.ContPestPrincipalM.ContSubPestPrincipalM.PestañasGenEvaM.EvaAbierta.contEvaAbierta')->with(['preg' => $preg, 'unidad' => $unidad, 'se_pe' => $se_pe, 'c' => $c, 'asig' => $asig, 'maestro' => $maestro]);
	}

}
