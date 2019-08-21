@extends('layout')

@section('title','inicio')

@section('content')
    <h1>
        Escoja una opción
    </h1>
    <ul>
        <li>
            <a href="{{route('listar')}}">Listar vehiculos</a>
        </li>
        <li>
            <a href="{{route('crear')}}">Registrar Vehiculo</a>
        </li>
        <li>
            <a href="{{route('stats')}}">Estadisitica de los Vehiculos</a>
        </li>
    </ul>
@endsection
