<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTemasTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('temas', function (Blueprint $table) {
			$table->increments('id_temas')->unique();
			$table->string('tema');
			$table->string('unidad');
			$table->string('nom_uni');
			$table->string('fk_asig', 7);
			$table->foreign('fk_asig')->references('clave_asig')->on('asignaturas')->onDelete('cascade');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('temas');
	}
}
