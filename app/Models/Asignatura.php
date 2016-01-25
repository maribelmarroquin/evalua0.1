<?php

namespace Evalua\Models;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model {
	protected $table = 'asignaturas';
	protected $primaryKey = 'clave_asig';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['clave_asig', 'nom_asig'];

	public function temas() {
		return $this->hasMany('Evalua\Models\Tema');
	}

	public function asignatura_maestros() {
		return $this->hasOne('Evalua\Models\AsignaturaMaestro');
	}

	public function asignatura_alumnos() {
		return $this->hasOne('Evalua\Models\AsignaturaAlumno');
	}
}
