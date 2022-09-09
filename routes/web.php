<?php

use Illuminate\Support\Facades\Route;
//Primero se invoca la clase con su ruta
use App\Http\Controllers\MiControlador;
use App\Http\Controllers\HeladeriaController;
use App\Http\Controllers\ControladorPrecios;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\EstudianteController;



Route::get('/', function () {
    return view('curso.bienvenido');
});

Route::get('/curso/nosotros', function () {
    return view('curso.nosotros');
});


Route::resource('curso', CursoController::class);

Route::resource('docente', DocenteController::class);

Route::resource('estudiante', EstudianteController::class);
