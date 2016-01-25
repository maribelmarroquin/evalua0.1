<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAsignaturaAlumnosTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('asignatura_alumnos', function (Blueprint $table) {
			$table->increments('id_as_al')->unique();
			$table->integer('fk_alumno')->unsigned();
			$table->foreign('fk_alumno')->references('id_alumno')->on('alumnos')->onDelete('cascade');
			$table->integer('fk_as_ma')->unsigned();
			$table->foreign('fk_as_ma')->references('id_as_ma')->on('asignatura_maestros')->onDelete('cascade');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('asignatura_alumnos');
	}
}
