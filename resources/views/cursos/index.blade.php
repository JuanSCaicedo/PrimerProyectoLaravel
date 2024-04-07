@extends('layouts.plantilla')

@section('tittle', 'cursos')
   

@section('content')
    <h1>Bienvenido a la página de cursos</h1>

    <a href="{{route('cursos.create')}}">Crear cursos</a>

    <ul>
        @foreach ($cursos as $curso)
            <li>
                <a href="{{route('cursos.show', $curso)}}">{{$curso->nombre}}</a>
            </li>
        @endforeach
    </ul>

    {{$cursos->links()}}
@endsection

