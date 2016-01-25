<?php

namespace Evalua\Http\Controllers\ControlMaestro;

use Evalua\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use Session;

class PreguntasController extends Controller {

	/* Mantiene el funcionemiento del controlador dentro de la sesión */
	public function __construct() {
		$this->middleware('auth');
	}

	public function show($id_temas) {
		$preg = \DB::table('preguntas')
			->select('id_preg', 'preg', 'resp', 'fk_temas')
			->where('fk_temas', '=', $id_temas)
			->paginate(10);

		$temas = \DB::table('temas')
			->select('id_temas', 'tema', 'unidad', 'nom_uni', 'fk_asig')
			->where('id_temas', '=', $id_temas)
			->get();

		return view('Maestros.SesionMaes.PrincipalMaes.ContPestPrincipalM.ContSubPestPrincipalM.PestañasBancoReacM.RegBancoM.preguntasM')->with(['preg' => $preg, 'temas' => $temas]);
	}

	public function update($id_preg, Request $request) {
		$temas = \Evalua\Models\Pregunta::find($id_preg);
		$temas->preg = $request->preg;
		$temas->resp = $request->resp;
		$temas->save();
		$id_temas = $request['fk_temas'];

		Session::flash('message-suceso', 'Pregunta modificada correctamente');
		return redirect()->action('ControlMaestro\PreguntasController@show', [$id_temas]);

	}

	public function destroy($id, Request $request) {
		$id_temas = $request['id_temas'];

		Session::flash('message-error', 'Pregunta eliminada correctamente');
		\Evalua\Models\Pregunta::destroy($id);
		return redirect()->action('ControlMaestro\PreguntasController@show', [$id_temas]);
	}
}