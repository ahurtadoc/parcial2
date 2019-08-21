@extends('layout')

@section('title','Estadisticas')

@section('content')
    <h2>
        Estadisticas
    </h2>
    <ul>
    @if(count($stats)>0)
    @foreach($marcas as $marca)
                <li>{{$marca->nombre}}: {{$stats[$marca->nombre]}}</li>
    @endforeach
    @else
        <h3>No hay vehiculos en el sistema</h3>
    @endif
    </ul>
@endsection
