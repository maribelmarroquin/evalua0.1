<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePreguntasTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('preguntas', function (Blueprint $table) {
			$table->increments('id_preg')->unique();
			$table->string('preg');
			$table->string('resp');
			$table->integer('fk_temas')->unsigned();
			$table->foreign('fk_temas')->references('id_temas')->on('temas')->onDelete('cascade');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('preguntas');
	}
}
