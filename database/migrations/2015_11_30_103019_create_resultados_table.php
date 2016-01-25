<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateResultadosTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('resultados', function (Blueprint $table) {
			$table->increments('clave_resul')->unique();
			$table->integer('fk_asig_alum')->unsigned();
			$table->foreign('fk_asig_alum')->references('id_as_al')->on('asignatura_alumnos')->onDelete('cascade');
			$table->date('fecha');
			$table->integer('calificacion');
			$table->enum('status', ['Aprobado', 'Reprobado']);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('resultados');
	}
}
