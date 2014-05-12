<?php

class Estudiante extends Eloquent {

	protected $table = 'estudiante';
	public $timestamps = false;

	// public static $rules = array(
	// 	'category_id'=>'required|integer',
	// 	'title'=>'required|min:2',
	// 	'description'=>'required|min:20',
	// 	'price'=>'required|numeric',
	// 	'availability'=>'integer',
	// 	'image'=>'required|image|mimes:jpeg,jpg,bpm,png,gif'
	// );

	public function getNombreAttribute()
    {
        return strtoupper($this->attributes['apellidoPaterno'].' '.$this->attributes['apellidoMaterno']).', '.ucfirst($this->attributes['nombre']);
    }
}