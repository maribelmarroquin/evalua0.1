<?php

namespace Evalua\Http\Controllers;

use Auth;
use Evalua\Http\Controllers\Controller;
use Evalua\Http\Requests\HomeAlumRequest;
use Illuminate\Http\Request;
use Redirect;
use Session;

class LogController extends Controller {

	public function store(HomeAlumRequest $request) {
		if (Auth::attempt(['email' => $request['email'], 'password' => $request['password'], 'tipo' => 'A'])) {
			return Redirect::to('datos');
		}
		Session::flash('message-error', 'Acceso denegado. Los datos son incorrectos.');
		return Redirect::to('/');
	}

	public function logout() {
		Auth::logout();
		return Redirect::to('/');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
	}
}
