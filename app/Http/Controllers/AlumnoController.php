<?php

namespace Evalua\Http\Controllers;

use Evalua\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use Session;

class AlumnoController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */

	public function index() {
		return view('Alumnos.index');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		$email_ex = array();
		$email = \DB::table('users')
			->select('email')
			->where('email', '=', $request->email)
			->get();

		foreach ($email as $mail) {
			$email_ex = $mail->email;
		}

		if ($request['email'] == $email_ex) {
			Session::flash('error', 'El correo electrónico ya ha sido registrado con anterioridad. Favor de utilizar otro.');
		} else {
			if ($request['password'] == $request['password_r']) {

				\Evalua\Models\User::create([
					'name' => $request['name'],
					'email' => $request['email'],
					'password' => bcrypt($request['password']),
					'tipo' => 'A',
				]);

				Session::flash('suceso', 'Usuario registrado correctamente');
			} else {
				Session::flash('error', 'Las contraseñas no coinciden. Favor de intentarlo nuevamente');
			}
		}
		return redirect::to('/');

	}

}
