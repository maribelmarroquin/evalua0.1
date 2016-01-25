<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAsignaturaMaestrosTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('asignatura_maestros', function (Blueprint $table) {
			$table->increments('id_as_ma')->unique();
			$table->integer('fk_maestros')->unsigned();
			$table->foreign('fk_maestros')->references('id_maes')->on('maestros')->onDelete('cascade');
			$table->string('fk_clave_asig', 7);
			$table->foreign('fk_clave_asig')->references('clave_asig')->on('asignaturas')->onDelete('cascade');
			$table->integer('seccion');
			$table->string('periodo', 12);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('asignatura_maestros');
	}
}
