<?php

namespace Evalua\Models;

use Illuminate\Database\Eloquent\Model;

class AsignaturaMaestro extends Model {
	protected $table = 'asignatura_maestros';
	protected $primaryKey = 'id_as_ma';
	protected $fillable = ['fk_maestros', 'fk_clave_asig', 'seccion', 'periodo'];

	public function asignaturas() {
		return $this->belongs_to('Evalua\Models\Asignatura');
	}

	public function maestros() {
		return $this->belongs_to('Evalua\Models\Maestro');
	}

	public function asignaturaAlumno() {
		return $this->hasOne('Evalua\Models\AsignaturaAlumno');
	}
}
