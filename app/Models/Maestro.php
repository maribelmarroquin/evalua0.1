<?php

namespace Evalua\Models;

use Illuminate\Database\Eloquent\Model;

class Maestro extends Model {

	protected $table = 'maestros';
	protected $primaryKey = 'id_maes';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['nom_maes', 'apa_maes', 'ama_maes', 'fk_users'];

	public function users() {
		return $this->belongs_to('Evalua\Models\User');
	}
}
