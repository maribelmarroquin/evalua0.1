<?php

namespace Evalua\Models;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model {
	protected $table = 'preguntas';
	protected $primaryKey = 'id_preg';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['preg', 'resp', 'fk_temas'];

	public function temas() {
		return $this->belongs_to('Evalua\Models\Tema');
	}
}
