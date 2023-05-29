@extends('welcome')
@section('title', 'Crear Vehiculo')
@section('content')
 
    <div class="position-absolute top-50 start-50 w-50 translate-middle">
        <div class="bg-info p-2">
            <h2 class="text-center mb-5">Formulario Crear Vehiculo</h2>
            <form action="{{url('createVehiculo')}}" method="POST" >
                @csrf
                <div class="mb-3">
                    <input type="text" class="form-control" name="marca" placeholder="Marca">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="modelo" placeholder="Modelo">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="tipo" placeholder="Tipo">
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Crear</button>
                </div>
            </form>
        </div>
    </div>
    
@endsection