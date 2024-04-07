@extends('layouts.plantilla')

@section('tittle', 'crear')


@section('content')
    <h1>Bienvenido a la página de crear un curso</h1>

    <a href="{{route('cursos.index')}}">Volver a cursos</a>

    <form action="{{ route('cursos.store') }}" method="POST">

        @csrf

        <label>
            Nombre:
            <br>
            <input type="text" name="nombre" value="{{old('nombre')}}">
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
            <input type="text" name="slug" value="{{old('slug')}}">
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
            <textarea name="descripcion" rows="5">{{old('descripcion')}}</textarea>
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
            <input type="text" name="categoria" value="{{old('categoria')}}">
        </label>

        @error('categoria')
            <br>
            <span>
                *{{ $message }}
            </span>
            <br>
        @enderror

        <br>
        <button type="submit">Enviar</button>
    </form>
@endsection
