@extends('layouts.plantilla')

@section('tittle', 'curso ' . $curso->nombre)


@section('content')
    <h1>Bienvenido al curso de {{ $curso->nombre }} </h1>

    <a href="{{ route('cursos.index') }}">Volver a cursos</a>

    <br>
    <a href="{{ route('cursos.edit', $curso) }}">Editar curso</a>

    <p>
        <strong>Categoria: </strong> {{ $curso->categoria }}
    </p>

    <p>
        {{ $curso->descripcion }}
    </p>

    <form action="{{route('cursos.destroy', $curso)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection
