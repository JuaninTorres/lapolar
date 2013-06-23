<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluacionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('evaluaciones', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('disenoevaluaciones_id');
			$table->enum('estado', array('abierta', 'cerrada'))->default('abierta');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('evaluaciones');
	}

}
