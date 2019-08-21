@extends('layout')

@section('title','Vehiculos')

@section('content')
    <h3>Vehiculos Registrados</h3>

    <div class="card">
        @if(count($vehiculos)>0)
            <table class="table-hover">
                <thead>
                <th scope="col">Placa</th>
                <th scope="col">Marca</th>
                <th scope="col"></th>
                </thead>
                <tbody>
                @foreach ($vehiculos as $vehiculo)

                    <tr>
                        @switch( $vehiculo->marca->nombre)
                            @case('Mazda')
                                <td>
                                    {{$vehiculo->placa}}    <a style="color: green"> Los de Mazda son los mejores</a>
                                </td>
                                <td>{{$vehiculo->marca->nombre}}</td>
                                @break
                            @case('Toyota')
                            <td style="color: red" ><b>{{$vehiculo->placa}}</b></td>
                            <td>{{$vehiculo->marca->nombre}}</td>
                                @break
                            @default
                            <td>{{$vehiculo->placa}}</td>
                            <td>{{$vehiculo->marca->nombre}}</td>
                        @endswitch


                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <h3>No hay vehiculos en el sistema</h3>
        @endif
    </div>
@endsection
