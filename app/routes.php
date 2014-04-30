<?php

// parametros de ruta de vinculacion a modelo
Route::model('estudiante', 'Estudiante');


//ESTUDIANTE
Route::get('/', 'EstudianteController@index');
Route::get('/show/{estudiante}', 'EstudianteController@show');
Route::get('/create', 'EstudianteController@create');
Route::get('/edit/{estudiante}', 'EstudianteController@edit');
Route::get('/delete/{estudiante}', 'EstudianteController@delete');

Route::post('/create', 'EstudianteController@handleCreate');
// Route::post('/edit', 'EstudianteController@handleEdit');
// Route::post('/delete', 'EstudianteController@handleDelete');
