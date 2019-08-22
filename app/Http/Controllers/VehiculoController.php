<?php

namespace App\Http\Controllers;

use App\Duenno;
use App\Marca;
use App\Vehiculo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

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
        $input = (object) $request->input();
        $array_files_validacion = [
            'placa' => ['required','string','unique:vehiculos'],
            'nombre' => ['required', 'string'],
            'cedula' => ['required', 'integer', 'unique:duennos'],
            'marca_id' => ['required','exists:marcas,id'],
            ];
        $validator = Validator::make($request->all(), $array_files_validacion);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $duenno = (new Duenno())->fill((array)$input);
        $duenno->save();

        $vehiculo = (new Vehiculo())->fill((array)$input);
        $vehiculo->duenno_id = $duenno->id ;
        if ($vehiculo->save()) {
            $this->setAlert('success', 'Se ha guardado la información correctamente');
            return redirect(route('crear'));
        };


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
