<?php

namespace Evalua\Http\Controllers\ControlMaestro;

use Evalua\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class GetTemasController extends Controller {

	/* Mantiene el funcionemiento del controlador dentro de la sesión */
	public function __construct() {
		$this->middleware('auth');
	}

	public function show($id_tema) {

		$temas = \DB::table('temas')
			->select('id_temas', 'tema', 'unidad', 'nom_uni', 'fk_asig')
			->where('id_temas', '=', $id_tema)
			->get();

		return view('Maestros.SesionMaes.PrincipalMaes.ContPestPrincipalM.ContSubPestPrincipalM.PestañasBancoReacM.RegBancoM.editarTemas')->with('temas', $temas);
	}

	public function update($id, Request $request) {

		$temas = \Evalua\Models\Tema::find($id);
		$temas->tema = $request->tema;
		$temas->unidad = $request->unidad;
		$temas->nom_uni = $request->nom_uni;
		$temas->save();

		$clave_asig = $request['fk_asig'];

		Session::flash('message-suceso', 'Tema modificado correctamente');

		return "<script lenguaje=\"JavaScript\">window.opener.location.reload(); window.close();</script>";

	}

	public function store(Request $request) {
		$clave_asig = $request['clave_asig'];

		\Evalua\Models\Pregunta::create([
			'preg' => $request['preg'],
			'resp' => $request['resp'],
			'fk_temas' => $request['fk_temas'],
		]);
		Session::flash('message-suceso', 'Pregunta Registrada Correctamente');
		return redirect()->action('ControlMaestro\TemasController@show', [$clave_asig]);
	}
}