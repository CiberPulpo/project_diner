@extends('admin.layout')

@section('titulo') ADMINISTRACIÓN COMENSALES @stop

@section('contenido')
    <div class="page-header">
        <h1>Todos los Comensales <small>Tengo que coger todo!</small></h1>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            <a href="{{ action('EstudianteController@create') }}" class="btn btn-primary">Crear Comensal</a>
        </div>
    </div>

    @if ($estudiantes->isEmpty())
        <p>Aquí no hay estudiantes! :(</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Bono</th>
                    <th>Nombre</th>
                    <th>Activo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($estudiantes as $estudiante)
                <tr>
                    <td>{{ $estudiante->numBono }}</td>
                    <td>{{ $estudiante->nombre }}</td>
                    <td>{{ $estudiante->estado ? 'Si' : 'No' }}</td>
                    <td>
                    	<a href="{{ action('EstudianteController@show', $estudiante->id) }}" class="btn btn-default">Mostrar</a>
                        <a href="{{ action('EstudianteController@edit', $estudiante->id) }}" class="btn btn-default">Editar</a>
                        <a href="{{ action('EstudianteController@delete', $estudiante->id) }}" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $estudiantes->links() }} <!--para mostrar el paginador de las filas-->
    @endif
@stop