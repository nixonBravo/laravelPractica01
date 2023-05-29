<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{

    public function index(){
        return view('vehiculos.create');
    }
    
    public function create()
    {
        
    }

    public function get(){
        
        return view('vehiculos.get', compact('vehiculos'));
    }

}
