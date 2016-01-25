<?php

namespace Evalua\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\Authorizable;

class User extends Model implements AuthenticatableContract,
AuthorizableContract,
CanResetPasswordContract {
	use Authenticatable, Authorizable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password', 'tipo'];

	protected $hidden = ['password', 'remember_token'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
/*
public static function boot() {
parent::boot();

static::creating(function ($user) {
$user->token = str_random(30);
});
}
 */
	/**
	 * Confirm the user.
	 *
	 * @return void
	 */

	public function confirmEmail() {
		$this->verified = true;
		$this->token = null;
		$this->save();
	}

	public function alumno() {
		return $this->hasOne('Evalua\Models\Alumno');
	}
	public function maestro() {
		return $this->hasOne('Evalua\Models\Maestro');
	}
	public function administrador() {
		return $this->hasOne('Evalua\Models\Administrador');
	}
}
