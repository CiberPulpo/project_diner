<?php

class EstudianteController extends BaseController {

	public function index()
	{
		$estudiantes = Estudiante::paginate(5);
    	return View::make('admin.estudiante.listar', compact('estudiantes'));
	}


	public function show(Estudiante $estudiante)
	{
	}


	public function create()
	{
		return View::make('admin.estudiante.crear');
	}


	public function handleCreate()
	{
		$estudiante = new Estudiante;
		$estudiante->dni = Input::get('dni');
		$estudiante->numCarnetUniversitario = Input::get('numCarnetUniversitario');
		$estudiante->nombre  = Input::get('nombre');
		$estudiante->apellidoPaterno = Input::get('apellidoPaterno');
		$estudiante->apellidoMaterno = Input::get('apellidoMaterno');
		$estudiante->anioIngreso = Input::get('anioIngreso');
		$estudiante->direccion = Input::get('direccion');
		$estudiante->sexo = Input::get('sexo');
		$estudiante->fechaNacimiento = Input::get('fechaNacimiento');
		$estudiante->sis = Input::get('sis');
		$estudiante->numBono = Input::get('numBono');
		$estudiante->estadomatricula = Input::get('estadomatricula');
		$estudiante->numExpediente = Input::get('numExpediente');
		$estudiante->estado = Input::get('estado');
		$estudiante->escuela_id = Input::get('escuela_id');

		//trae la imagen
		$image = Input::file('image');
		//ponemos un nombre a la imagen
		$filename = date('Y-m-d-H.i.s')."-".$image->getClientOriginalName();
		//cambiamos de tamaño y lo guardamos en la carpeta img/products/
		Image::make($image->getRealPath())->resize(468, 249)->save(public_path('img/comensales/' . $filename));
		//guardamos en la bd en el campo image el nombre de toda la ruta con la extension de la imagen
		$product->image = 'img/comensales/'.$filename;


		$estudiante->save();

		return Redirect::action('EstudianteController@index');
	}


	public function edit(Estudiante $estudiante)
	{
		//return View::make('edit', compact('estudiante'));
	}


	/*public function handleEdit()
	{
		$game = Game::findOrFail(Input::get('id'));
		$game->title     = Input::get('title');
		$game->publisher = Input::get('publisher');
		$game->complete  = Input::has('complete');
		$game->save();

		return Redirect::action('GamesController@index');
	}*/


	public function delete(Estudiante $estudiante)
	{
		//return View::make('delete', compact('estudiante'));
	}


	/*public function handleDelete()
	{
		$id = Input::get('game');
		$game = Game::findOrFail($id);
		$game->delete();

		return Redirect::action('GamesController@index');
	}*/

}