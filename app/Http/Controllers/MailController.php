<?php

namespace Evalua\Http\Controllers;

use Evalua\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use Redirect;
use Session;

class MailController extends Controller {

	/* Mantiene el funcionemiento del controlador dentro de la sesión */

	public function index() {
		return view('Maestros.Formularios.contacto');
	}

	public function store(Request $request) {
		Mail::send('emails.contact', $request->all(), function ($msj) {
			$msj->subject('Correo de Contacto');
			$msj->to('evaluameduv@gmail.com');
		});

		Session::flash('message-suceso', 'Mensaje Enviado Correctamente.');
		return Redirect::to('contacto');
	}
}