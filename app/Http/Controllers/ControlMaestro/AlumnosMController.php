<?php

namespace Evalua\Http\Controllers\ControlMaestro;

use Evalua\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use Session;

class AlumnosMController extends Controller {

	public function __construct() {
		$this->middleware('auth');
	}

	public function show($clave_asig) {

		$asig = \DB::table('asignaturas')
			->select('clave_asig', 'nom_asig')
			->where('clave_asig', '=', $clave_asig)
			->get();

		$usuarios = \DB::table('asignatura_maestros')
			->select('id_as_ma')
			->where('fk_clave_asig', '=', $clave_asig)
			->get();
		return view('Maestros.SesionMaes.PrincipalMaes.ContPestPrincipalM.ContSubPestPrincipalM.PestañasRegAlumM.alumnosM')->with(['asig' => $asig, 'usuarios' => $usuarios]);
	}

	public function store(Request $request) {
		$email = $request['email'];
		$fk_users = \DB::table('users')
			->select('id')
			->where(['email' => $email, 'tipo' => 'A'])
			->get();
		foreach ($fk_users as $user) {
			$fk_u = $user->id;
		}

		\Evalua\Models\Alumno::create([
			'nom_alumno' => $request['nom_alumno'],
			'apa_alumno' => $request['apa_alum'],
			'ama_alumno' => $request['ama_alum'],
			'sem_alumno' => $request['sem_alum'],
			'fk_users' => $fk_u, //checar
			'fk_asig_maes' => $request['fk_asig_maes'],
		]);
		Session::flash('message-suceso', 'Alumno registrado correctamente');
		return redirect()->action('ControlMaestro\AlumnosMController@show', [$request->clave_asig]);
	}

}
