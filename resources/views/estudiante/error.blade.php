@extends('layouts.app')

@section('titulo', 'Actualizado')

@section('contenido')
    <div class="text-center">
        <div class="alert alert-success" role="alert">
            El documento no debe superar los 10 digitos...
        </div>
        <a href="/estudiante" class="m-5 btn btn-dark">Volver</a>
    </div>
@endsection
