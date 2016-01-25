<?php

namespace Evalua\Http\Controllers\ControlMaestro;

use Evalua\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EvaRelController extends Controller {

	public function __construct() {
		$this->middleware('auth');
	}

	public function show(Request $request, $clave_asig) {

		$preg = \DB::table('preguntas')
			->select('preg', 'resp')
			->join('temas', 'preguntas.fk_temas', '=', 'temas.id_temas')
			->where(['temas.unidad' => $request->unidad, 'fk_asig' => $clave_asig])
			->orderBy(\DB::raw('RAND()'))
			->paginate($request->cantidad);

		foreach ($preg as $posC => $resp) {
			$correctas[$posC] = $resp->resp;

		}
		$i = 0;
		while (count($correctas)) {

			// takes a rand array elements by its key
			$element = array_rand($correctas);
			// assign the array and its value to an another array
			$respuestas[$i] = $correctas[$element];
			//delete the element from source array
			unset($correctas[$element]);
			$i++;
		}

		/*Para mostrar la unidad a la que pertenece el examen*/
		$unidad = \DB::table('temas')
			->select('nom_uni', 'unidad')
			->where('unidad', '=', $request->unidad)
			->groupBy('unidad')
			->get();

		/*Para mostrar sección de la asignatura y periodo de la evalución*/
		$se_pe = \DB::table('asignatura_maestros')
			->select('seccion', 'periodo', 'fk_maestros')
			->where('fk_clave_asig', '=', $clave_asig)
			->get();

		/*Para mostrar los datos del maestro*/
		foreach ($se_pe as $sec_per) {
		}
		$maestro = \DB::table('maestros')
			->select('nom_maes', 'apa_maes', 'ama_maes')
			->where('id_maes', '=', $sec_per->fk_maestros)
			->get();
		/*Para mostrar el nombre de la asignatura*/
		$asig = \DB::table('asignaturas')
			->select('nom_asig')
			->where('clave_asig', '=', $clave_asig)
			->get();

		$c = 0;
		return view('Maestros.SesionMaes.PrincipalMaes.ContPestPrincipalM.ContSubPestPrincipalM.PestañasGenEvaM.EvaRel.contEvaRel')->with(['preg' => $preg, 'respuestas' => $respuestas, 'unidad' => $unidad, 'se_pe' => $se_pe, 'c' => $c, 'asig' => $asig, 'maestro' => $maestro]);
	}

}
