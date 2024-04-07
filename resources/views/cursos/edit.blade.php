@extends('layouts.plantilla')

@section('tittle', 'editar')


@section('content')
    <h1>Bienvenido a la página de editar un curso</h1>

    <a href="{{ route('cursos.index') }}">Volver a cursos</a>

    <form action="{{ route('cursos.update', $curso) }}" method="POST">

        @csrf

        @method('put')

        <label>
            Nombre:
            <br>
            <input type="text" name="nombre" value="{{ old('nombre', $curso->nombre) }}">
        </label>

        @error('nombre')
            <br>
            <span>
                *{{ $message }}
            </span>
            <br>
        @enderror

        <br>

        <label>
            Slug:
            <br>
            <input type="text" name="slug" value="{{ old('slug', $curso->slug) }}">
        </label>

        @error('slug')
            <br>
            <span>
                *{{ $message }}
            </span>
            <br>
        @enderror

        <br>

        <label>
            Descripción:
            <br>
            <textarea name="descripcion" rows="5">{{ old('descripcion', $curso->descripcion) }}</textarea>
        </label>

        @error('descripcion')
            <br>
            <span>
                *{{ $message }}
            </span>
            <br>
        @enderror

        <br>
        <label>
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{ $curso->categoria }}">
        </label>

        @error('categoria')
            <br>
            <span>
                *{{ $message }}
            </span>
            <br>
        @enderror

        <br>
        <button type="submit">Actualizar</button>
    </form>
@endsection
