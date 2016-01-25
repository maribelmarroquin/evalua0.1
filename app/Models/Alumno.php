<?php

namespace Evalua\Models;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model {

	protected $table = 'alumnos';
	protected $primaryKey = 'id_alumno';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['nom_alumno', 'apa_alumno', 'ama_alumno', 'sem_alumno', 'fk_users'];

	public function users() {
		return $this->belongs_to('Evalua\Models\User');
	}

	public function asignaturaAlumno() {
		return $this->hasMany('Evalua\Models\AsignaturaAlumno');
	}

}
