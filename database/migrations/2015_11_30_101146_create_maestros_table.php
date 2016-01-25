<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMaestrosTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('maestros', function (Blueprint $table) {
			$table->increments('id_maes')->unique();
			$table->string('nom_maes', 50);
			$table->string('apa_maes', 50);
			$table->string('ama_maes', 50);
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
		Schema::drop('maestros');
	}
}
