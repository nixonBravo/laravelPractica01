<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{

    public function index(){
        return view('vehiculos.create');
    }
    
    public function create(Request $request)
    {
        $vehiculos = new Vehiculo();
        $vehiculos->marca = $request->marca;
        $vehiculos->modelo = $request->modelo;
        $vehiculos->tipo = $request->tipo;
        $vehiculos->save();
        return view('vehiculos.create');
    }

    public function get(){
        $vehiculos = Vehiculo::all();
        return view('vehiculos.get', compact('vehiculos'));
    }

}
