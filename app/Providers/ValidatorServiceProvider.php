<?php namespace Evalua\Providers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class ValidatorServiceProvider extends ServiceProvider {

	public function boot() {
		Validator::resolver(function ($translator, $data, $rules, $messages) {
			return new \Evalua\Core\Validator($translator, $data, $rules, $messages);
		});
	}

	public function register() {
	}

}