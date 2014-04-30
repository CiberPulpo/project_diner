@extends('layout')

@section('titulo') Crear Comensal @stop

@section('contenido')
    <div class="page-header">
        <h1>Crear Comensal <small>y algún día terminar!</small></h1>
    </div>

    <form action="{{ action('EstudianteController@handleCreate') }}" method="post" role="form">
    	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
	        <div class="form-group">
	            {{ Form::label('dni', 'DNI') }}
	            {{ Form::text('dni',null, array('placeholder'=>'DNI', 'class'=>'form-control')) }}
	        </div>
	        <div class="form-group">
	        	{{ Form::label('numCarnetUniversitario', 'N° Carnet Univ.') }}
	            {{ Form::text('numCarnetUniversitario',null, array('placeholder'=>'N° Carnet Universitario', 'class'=>'form-control')) }}
	        </div>
	        <div class="form-group">
	        	{{ Form::label('nombre','Nombre Completo') }}
	        	{{ Form::text('nombre', null, array('placeholder'=>'Nombre', 'class'=>'form-control')) }}
	        	{{ Form::text('apellidoPaterno', null, array('placeholder'=>'Apellido Paterno', 'class'=>'form-control')) }}
	        	{{ Form::text('apellidoMaterno', null, array('placeholder'=>'Apellido Materno', 'class'=>'form-control')) }}
	        </div>
	        <div class="form-group">
	        	{{ Form::label('anioIngreso','Año de Ingreso')}}
	        	<input type="date" id="anioIngreso" class="form-control" required="required">
	        </div>
	        <div class="form-group">
	        	{{ Form::label('direccion', 'Dirección') }}
	            {{ Form::text('direccion',null, array('placeholder'=>'Dirección', 'class'=>'form-control')) }}
	        </div>
	        <div class="form-group">
	        	<label for="sexo">Sexo</label>
	        	<input type="radio" name="sexo" /> M
	        	<input type="radio" name="sexo" /> F
	        </div>
	        <div class="form-group">
	        	{{ Form::label('fechaNacimiento','Fecha Nacimiento')}}
	        	<input type="date" id="fechaNacimiento" class="form-control" required="required">
	        </div>
	        <input type="submit" value="Crear" class="btn btn-primary" />
	        <a href="{{ action('EstudianteController@index') }}" class="btn btn-link">Cancelar</a>

    	</div>
    </form>
@stop