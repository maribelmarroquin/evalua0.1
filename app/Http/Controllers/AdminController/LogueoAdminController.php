<?php

namespace Evalua\Http\Controllers\AdminController;

use Auth;
use Evalua\Http\Controllers\Controller;
use Evalua\Http\Requests\PrincipalAlumRequest;
use Redirect;
use Session;

class LogueoAdminController extends Controller {

	public function store(PrincipalAlumRequest $request) {
		if (Auth::attempt(['email' => $request['email'], 'password' => $request['password'], 'tipo' => 'C'])) {
			return Redirect::to('admin001002/principal');
		}

		Session::flash('message-error', 'Acceso denegado. Los datos son incorrectos.');
		return Redirect::to('admin001002/inicio');

	}

	public function logout() {
		Auth::logout();
		return Redirect::to('admin001002/inicio');
	}

}
