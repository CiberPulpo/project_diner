@extends('admin.layout')

@section('titulo') Crear Comensal @stop

@section('contenido')
    <div class="page-header">
        <h1>Crear Comensal <small>y algún día terminar!</small></h1>
    </div>

    <form action="{{ action('EstudianteController@handleCreate') }}" method="post" role="form">
    	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8" style="float:right;">
    	  <div><legend>Fotografia</legend></div>
    	  <br>
    	  <img src="img/comensales/img.JPG">
    	  <br><br>
    	  {{ Form::file('image') }}
    	</div>
    	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
	    	<legend>Ingrese Datos del Estudiante</legend>
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
	        	{{ Form::radio('sexo', 'M',true) }}M
	        	{{ Form::radio('sexo', 'F') }}F
	        </div>
	        <div class="form-group">
	        	{{ Form::label('fechaNacimiento','Fecha Nacimiento')}}
	        	<input type="date" id="fechaNacimiento" class="form-control" required="required">
	        </div>
	        <div class="form-group">
	        	{{ Form::label('sis', 'SIS') }}
	            {{ Form::text('sis', null, array('placeholder'=>'SIS', 'class'=>'form-control')) }}
	        </div>
	        <div class="form-group">
	        	{{ Form::label('numBono', 'N° Bono') }}
	            {{ Form::text('numBono',null, array('placeholder'=>'N° Bono', 'class'=>'form-control')) }}
	        </div>
	        <div class="form-group">
	        	{{ Form::label('estadomatricula', 'Estado Matricula') }}
	        	{{ Form::radio('estadomatricula', 'A',true) }}Activo
	        	{{ Form::radio('estadomatricula', 'I') }}Inactivo
	        </div>
	        <div class="form-group">
	        	{{ Form::label('numExpediente', 'N° Expediente') }}
	            {{ Form::text('numExpediente',null, array('placeholder'=>'N° Expediente', 'class'=>'form-control')) }}
	        </div>
	        <div class="form-group">
	        	{{ Form::label('estado', 'Estado') }}
	            {{ Form::radio('estado', 'A',true) }}Activo
	        	{{ Form::radio('estado', 'I') }}Inactivo
	        </div>
	        <div class="form-group">
	        	{{ Form::label('facultad', 'Facultad') }}
		        {{ Form::select('facultad', array('Ing. Sistemas','Administracion','Arqueologia'))}}
	        </div>
	        <div class="form-group">
		        {{ Form::label('escuela_id', 'Escuela') }}
				{{ Form::select('escuela_id', array('Ing. Sistemas','Administracion','Arqueologia')) }}
			</div>

	        <input type="submit" value="Crear" class="btn btn-primary" />
	        <a href="{{ action('EstudianteController@index') }}" class="btn btn-link">Cancelar</a>

    	</div>
    </form>
@stop