<?php

namespace Evalua\Http\Controllers\ControlMaestro;

use Auth;
use Evalua\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use Session;

class CambioConMController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function __construct() {
		$this->middleware('auth');
	}

	public function store(Request $request) {
		if ($request->n_pass == $request->n_pass2) {
			$usuario = \DB::table('users')
				->select('password')
				->where('id', '=', Auth::user()->id)
				->get();

			foreach ($usuario as $user) {
			}

			if ($user->password == $request->password) {
				$maestro = \Evalua\Models\User::find(Auth::user()->id);
				$maestro->fill($request->all());
				$maestro->save();

				Session::flash('message-suceso', 'Contraseña modificada correctamente.');
			} else {
				Session::flash('message-error', 'La contraseña actual es incorrecta.');
			}

		} else {
			Session::flash('message-error', 'Las contraseñas no coinciden. Favor de verificar la nueva contraseña.');

		}

		return redirect::to('maestros00001/principal');
	}
}
