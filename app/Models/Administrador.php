<?php

namespace Evalua\Models;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model {
	protected $table = 'administradors';
	protected $primaryKey = 'id_admon';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['fk_users'];
}
