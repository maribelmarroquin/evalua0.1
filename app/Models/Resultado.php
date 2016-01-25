<?php

namespace Evalua\Models;

use Illuminate\Database\Eloquent\Model;

class Resultado extends Model {
	protected $table = 'resultados';
	protected $primaryKey = 'clave_resul';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['fk_asig_alum', 'fecha', 'calificacion', 'status'];

	public function asignatura_alumnos() {
		return $this->belongs_to('Evalua\Models\AsignaturaAlumno');
	}

}
