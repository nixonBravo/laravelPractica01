<?php

use App\Http\Controllers\VehiculoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/createVehiculo', [VehiculoController::class, 'index']);
Route::post('/createVehiculo', [VehiculoController::class, 'create']);
Route::get('/Vehiculos', [VehiculoController::class, 'get']);
