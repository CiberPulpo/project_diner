<?php

use Illuminate\Database\Migrations\Migration;

class CreateComedor extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('permisoRecojo', function($tabla) {
			$tabla->increments('id');
			$tabla->string('descripcion',50);
		});

		Schema::create('cargo', function($tabla) {
			$tabla->increments('id');
			$tabla->string('nombre',45);
			$tabla->string('descripcion',100);
			$tabla->boolean('estado');
		});

		Schema::create('usuario', function($tabla) {
			$tabla->increments('id');
			$tabla->string('user',40);
			$tabla->string('password',40);
			$tabla->string('email',45);
			$tabla->integer('cargo_id')->unsigned();
			$tabla->foreign('cargo_id')->references('id')->on('cargo');
		});

		Schema::create('facultad', function($tabla) {
			$tabla->increments('id');
			$tabla->string('nombre',50);
			$tabla->boolean('estado');
		});

		Schema::create('escuela', function($tabla) {
			$tabla->increments('id');
			$tabla->string('nombre',50);
			$tabla->boolean('estado');
			$tabla->integer('facultad_id')->unsigned();
			$tabla->foreign('facultad_id')->references('id')->on('facultad');
		});

		Schema::create('estudiante', function($tabla) {
			$tabla->increments('id');
			$tabla->string('dni',8);
			$tabla->string('numCarnetUniversitario',10);
			$tabla->string('nombre');
			$tabla->string('apellidoPaterno',45);
			$tabla->string('apellidoMaterno',45);
			$tabla->date('anioIngreso');
			$tabla->string('direccion',70);
			$tabla->string('sexo',1);
			$tabla->date('fechaNacimiento');
			$tabla->string('imagen');
			$tabla->string('sis',10);
			$tabla->string('numBono',4);
			$tabla->boolean('estadomatricula');
			$tabla->string('numExpediente',6);
			$tabla->boolean('estado');
			$tabla->integer('permisoRecojo_id')->unsigned()->nullable();
			$tabla->foreign('permisoRecojo_id')->references('id')->on('permisoRecojo');
			$tabla->integer('usuario_id')->unsigned()->nullable();
			$tabla->foreign('usuario_id')->references('id')->on('usuario');
			$tabla->integer('escuela_id')->unsigned();
			$tabla->foreign('escuela_id')->references('id')->on('escuela');
		});



		// Schema::create('sancion', function($tabla) {
		// 	$tabla->increments('id');
		// 	$tabla->timestamps();
		// });

		// Schema::create('personal', function($tabla) {
		// 	$tabla->increments('id');
		// 	$tabla->timestamps();
		// });

		// Schema::create('estudianteTemporal', function($tabla) {
		// 	$tabla->increments('id');
		// 	$tabla->timestamps();
		// });

		// Schema::create('registroApoyo', function($tabla) {
		// 	$tabla->increments('id');
		// 	$tabla->timestamps();
		// });

		// Schema::create('asistencia', function($tabla) {
		// 	$tabla->increments('id');
		// 	$tabla->timestamps();
		// });

		// Schema::create('ventaBono', function($tabla) {
		// 	$tabla->increments('id');
		// 	$tabla->timestamps();
		// });

		// Schema::create('detalle_ventaBono', function($tabla) {
		// 	$tabla->increments('id');
		// 	$tabla->timestamps();
		// });



		// Schema::create('matricula', function($tabla) {
		// 	$tabla->increments('id');
		// 	$tabla->timestamps();
		// });

		// Schema::create('cargo_historia', function($tabla) {
		// 	$tabla->increments('id');
		// 	$tabla->timestamps();
		// });

		// Schema::create('privilegios', function($tabla) {
		// 	$tabla->increments('id');
		// 	$tabla->timestamps();
		// });

		// Schema::create('asignacion', function($tabla) {
		// 	$tabla->increments('id');
		// 	$tabla->timestamps();
		// });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('estudiante');
		Schema::drop('escuela');
		Schema::drop('facultad');
		Schema::drop('usuario');
		Schema::drop('cargo');
		Schema::drop('permisoRecojo');
	}

}
