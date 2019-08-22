@extends('layout')

@section('title','Registrar Vehiculo')

@section('content')
    <h2>
        Agregue los datos necesarios
    </h2>
    <div class="box-body">
        <form class="form-horizontal col-lg-6 col-lg-offset-3" method="POST" action="{{action('VehiculoController@store') }}">
            {{ csrf_field() }}
{{--            <div class="form-group{{ $errors->has('numero_documento') ? ' has-error' : '' }}">--}}
                <label class="col-md-4 control-label">Placa</label>
                <div class="col-md-6">
                    <input class="form-control @error('placa') is-invalid @enderror"
                           type="text" id="placa" name="placa" value="{{ old('placa') }}"
                           placeholder="Placa" required autofocus>
                    @if ($errors->has('placa'))
                        <span class="help-block" style="color: darkred">
                                <strong>{{ $errors->first('placa') }}</strong>
                            </span>
                    @endif
                    </div>
            <label class="col-md-6 control-label">Nombre del dueño</label>
            <div class="col-md-11">
                <input class="form-control @error('nombre') is-invalid @enderror"
                       type="text" id="nombre" name="nombre" value="{{ old('nombre') }}"
                       placeholder="Ejemplo: Juanito Perez" required autofocus>
                                    @if ($errors->has('nombre'))
                                        <span class="help-block" style="color: darkred">
                                            <strong>{{ $errors->first('nombre') }}</strong>
                                        </span>
                                    @endif

            </div>
            <label class="col-md-6 control-label">Cedula del dueño</label>
            <div class="col-md-8">
                <input class="form-control @error('cedula') is-invalid @enderror"
                       type="number" min="0" id="cedula" name="cedula" value="{{ old('cedula') }}"
                       placeholder="xxxxxxxxxx" required autofocus>
                                    @if ($errors->has('cedula'))
                                        <span class="help-block" style="color: darkred">
                                            <strong>{{ $errors->first('cedula') }}</strong>
                                        </span>
                                    @endif
            </div>

            <label for="marca_id" class="col-md-11 control-label">Seleccione una marca </label>
            <div class="form-group ">
            <select multiple class="form-control @error('marca_id') is-invalid @enderror"
                    id="marca_id" name="marca_id">
                @foreach($marcas as $marca)
                <option value="{{$marca->id}}">{{$marca->nombre}}</option>
                @endforeach

            </select>
                @if ($errors->has('marca_id'))
                    <span class="help-block" style="color: darkred">
                        <strong>{{ $errors->first('marca_id') }}</strong>
                    </span>
                @endif

            </div>
            <button type="submit" class="btn btn-primary">
            Registrar
            </button>

        </form>
    </div>
@endsection
