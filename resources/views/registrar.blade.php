@extends('layout')

@section('title','Registrar Vehiculo')

@section('content')
    <h2>
        Agregue los datos necesarios
    </h2>
    <div class="box-body">
        <form class="form-horizontal col-lg-6 col-lg-offset-3" method="POST" action="{{action('VehiculoController@index') }}">
{{--            {{ csrf_field() }}--}}
{{--            <div class="form-group{{ $errors->has('numero_documento') ? ' has-error' : '' }}">--}}
                <label class="col-md-4 control-label">Placa</label>
                <div class="col-md-6">
                    <input class="form-control" type="text" id="placa" name="placa" value="{{ old('placa') }}"
                           placeholder="Placa" required autofocus>
{{--                    @if ($errors->has('numero_documento'))--}}
{{--                        <span class="help-block">--}}
{{--                                <strong>{{ $errors->first('numero_documento') }}</strong>--}}
{{--                            </span>--}}
                    </div>
            <label class="col-md-6 control-label">Nombre del dueño</label>
            <div class="col-md-11">
                <input class="form-control" type="text" id="nombre" name="nombre" value="{{ old('nombre') }}"
                       placeholder="Ejemplo: Juanito Perez" required autofocus>
                {{--                    @if ($errors->has('numero_documento'))--}}
                {{--                        <span class="help-block">--}}
                {{--                                <strong>{{ $errors->first('numero_documento') }}</strong>--}}
                {{--                            </span>--}}
            </div>
            <label class="col-md-6 control-label">Cedula del dueño</label>
            <div class="col-md-8">
                <input class="form-control" type="number" min="0" id="cedula" name="cedula" value="{{ old('cedula') }}"
                       placeholder="xxxxxxxxxx" required autofocus>
                {{--                    @if ($errors->has('numero_documento'))--}}
                {{--                        <span class="help-block">--}}
                {{--                                <strong>{{ $errors->first('numero_documento') }}</strong>--}}
                {{--                            </span>--}}
            </div>

            <label for="marca" class="col-md-11 control-label">Seleccione una marca </label>
            <div class="form-group ">
            <select multiple class="form-control" id="marca" name="marca">
                @foreach($marcas as $marca)
                <option>{{$marca->nombre}}</option>
                @endforeach
            </select>

            </div>
            <button type="submit" class="btn btn-primary">
            Registrar
            </button>

        </form>
    </div>
@endsection
