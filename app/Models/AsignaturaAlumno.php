<?php

namespace Evalua\Models;

use Illuminate\Database\Eloquent\Model;

class AsignaturaAlumno extends Model {
	protected $table = 'asignatura_alumnos';
	protected $primaryKey = 'id_as_al';
	protected $fillable = ['fk_alumno', 'fk_as_ma'];

	public function alumnos() {
		return $this->belongs_to('Evalua\Models\Alumno');
	}

	public function asignaturaMestros() {
		return $this->belongs_to('Evalua\Models\AsignaturaMaestro');
	}
}
