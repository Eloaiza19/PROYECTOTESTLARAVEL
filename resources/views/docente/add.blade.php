@extends('layouts.app')

@section('titulo', 'Añadido')

@section('contenido')
    <div class="text-center">
        <div class="alert alert-success" role="alert">
            El docente se  añadido con exito...
        </div>
        <a href="/docente" class="m-5 btn btn-dark">Volver</a>
    </div>
@endsection