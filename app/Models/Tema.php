<?php

namespace Evalua\Models;

use Illuminate\Database\Eloquent\Model;

class Tema extends Model {
	protected $table = 'temas';
	protected $primaryKey = 'id_temas';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['tema', 'unidad', 'nom_uni', 'fk_asig'];

	public function preguntas() {
		return $this->hasMany('Evalua\Models\Pregunta');
	}
	public function asignaturas() {
		return $this->belongs_to('Evalua\Models\Asignatura');
	}
}
