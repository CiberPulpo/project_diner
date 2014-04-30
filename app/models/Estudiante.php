<?php

class Estudiante extends Eloquent {

	protected $table = 'estudiante';
	public $timestamps = false;

	public function getNombreAttribute()
    {
        return strtoupper($this->attributes['apellidoPaterno'].' '.$this->attributes['apellidoMaterno']).', '.ucfirst($this->attributes['nombre']);
    }
}