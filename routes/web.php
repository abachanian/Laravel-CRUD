<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;

Route::get('/', function () {
    return view('welcome');
});

/* Forma fácil
Route::get('/empleado', function () {
    return view('empleado.index');
});

a través del controller
Route::get('/empleado/create',[EmpleadoController::class,'create']);*/

Route::resource('empleado',EmpleadoController::class);