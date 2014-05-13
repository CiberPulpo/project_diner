<?php

// parametros de ruta de vinculacion a modelo
Route::model('estudiante', 'Estudiante');

// Validamos los datos de inicio de sesión.
Route::post('login', 'AuthController@postLogin');

Route::get('login', 'AuthController@showLogin');

//ESTUDIANTE
Route::get('/', 'EstudianteController@index');
Route::get('/show/{estudiante}', 'EstudianteController@show');
Route::get('/create', 'EstudianteController@create');
Route::get('/edit/{estudiante}', 'EstudianteController@edit');
Route::get('/delete/{estudiante}', 'EstudianteController@delete');

Route::post('/create', 'EstudianteController@handleCreate');
// Route::post('/edit', 'EstudianteController@handleEdit');
// Route::post('/delete', 'EstudianteController@handleDelete');
