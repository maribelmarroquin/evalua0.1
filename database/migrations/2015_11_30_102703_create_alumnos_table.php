<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAlumnosTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('alumnos', function (Blueprint $table) {
			$table->increments('id_alumno')->unique();
			$table->string('nom_alumno', 50)->nullable();
			$table->string('apa_alumno', 50)->nullable();
			$table->string('ama_alumno', 50)->nullable();
			$table->string('sem_alumno', 2)->nullable();
			$table->integer('fk_users')->unsigned();
			$table->foreign('fk_users')->references('id')->on('users')->onDelete('cascade');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('alumnos');
	}
}
