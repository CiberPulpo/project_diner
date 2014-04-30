<?php

class EstudianteController extends BaseController {

	public function index()
	{
		$estudiantes = Estudiante::paginate(5);
    	return View::make('estudiante.listar', compact('estudiantes'));
	}


	public function show(Estudiante $estudiante)
	{

	}


	public function create()
	{
		return View::make('estudiante.crear');
	}


	public function handleCreate()
	{
		// $game = new Game;
		// $game->title     = Input::get('title');
		// $game->publisher = Input::get('publisher');
		// $game->complete  = Input::has('complete');
		// $game->save();

		// return Redirect::action('GamesController@index');
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