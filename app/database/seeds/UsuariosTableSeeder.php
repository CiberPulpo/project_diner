<?php

class UsuariosTableSeeder extends Seeder {

	public function run() {

		$cargo = new Cargo;
		$cargo->nombre = 'administrador';
		$cargo->descripcion = 'tiene casi todos los privilegios';
		$cargo->estado = '1';
		$cargo->save();

		$user = new Usuario;
		$user->user = 'user';
		$user->password = Hash::make('user');
		$user->email = 'user@acunica.com';
		$user->cargo_id = 1;
		$user->save();

		$facultad = new Facultad;
		$facultad->nombre = 'Ingenieria de Sistemas Facu';
		$facultad->estado = '1';
		$facultad->save();

		$escuela = new Escuela;
		$escuela->nombre = 'Ingeniería de Sistemas Escuela';
		$escuela->estado = '1';
		$escuela->facultad_id = '1';
		$escuela->save();


		$estudiante = new Estudiante;
		$estudiante->dni = '12345678';
		$estudiante->numCarnetUniversitario = '20102129';
		$estudiante->nombre = 'Pool';
		$estudiante->apellidoPaterno = 'Almeyda';
		$estudiante->apellidoMaterno = 'Levano';
		$estudiante->anioIngreso = '2014-04-26';
		$estudiante->direccion = 'Chincha Av. libertadores';
		$estudiante->sexo = 'M';
		$estudiante->fechaNacimiento = '1993-07-20';
		$estudiante->sis = '3123434343';
		$estudiante->numBono = '1111';
		$estudiante->estadomatricula = '0';
		$estudiante->numExpediente = '123456';
		$estudiante->estado = '1';
		// $estudiante->permisoRecojo_id
		$estudiante->usuario_id = '1';
		$estudiante->escuela_id = '1';
		$estudiante->save();

	}
}