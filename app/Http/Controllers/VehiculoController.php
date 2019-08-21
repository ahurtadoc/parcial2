<?php

namespace App\Http\Controllers;

use App\Marca;
use App\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    public function index()
    {
        $vehiculos = Vehiculo::all();
        return view('listar',compact('vehiculos'));

    }

    public function create()
    {
        $marcas = Marca::all();
        return view('registrar',compact('marcas'));
    }

    public function store(Request $request)
    {
        $array_files_validacion = [
            'placa' => ['required','string','unique:vehiculos'],
            'nombre' => ['required', 'string'],
            'cedula' => ['required', 'integer', 'unique:duenno'],
            'marca' => ['required','exists:marcas,nombre'],
            ];
        $validator = Validator::make($request->all(), $array_files_validacion);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $request->input()->marca;

    }

    public function stats()
    {
        $marcas = Marca::all();
        $stats = [];
        foreach ($marcas as $marca) {
            $cantidad = count(Vehiculo::where('marca_id','=',$marca->id)->get());
            $stats[$marca->nombre]= $cantidad;
        }
//        dd($stats);

        return view('stats',compact('stats','marcas'));
    }
}
