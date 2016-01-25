<?php

namespace Evalua\Http\Controllers\ControlMaestro;

use Auth;
use Evalua\Http\Controllers\Controller;
use Evalua\Http\Requests\PrincipalMaesRequest;
use Redirect;
use Session;

class LogMController extends Controller {

	public function store(PrincipalMaesRequest $request) {
		if (Auth::attempt(['email' => $request['email'], 'password' => $request['password'], 'tipo' => 'B'])) {
			return Redirect::to('maestros00001/principal');
		}

		Session::flash('message-error', 'Acceso denegado. Los datos son incorrectos.');
		return Redirect::to('maestros00001/inicio');

	}

	public function logout() {
		Auth::logout();
		return Redirect::to('maestros00001/inicio');
	}
}
