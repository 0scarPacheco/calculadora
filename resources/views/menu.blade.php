@extends('layouts.principal')

@section('title', 'Calculadora')

@section('content')
    <h1>Escoge la opción que deseas realizar</h1>
    <div>
        <a href='/laravel/calculadora/public/suma'>Suma</a> <br> 
        <a href='/laravel/calculadora/public/multi'>Multiplicación</a> <br> 
        <a href='/laravel/calculadora/public/expo'>Exponente</a> <br>
        <a href='/laravel/calculadora/public/salida'>Salida</a>
    </div><br>
    <div>
        <img id="img-principal" src="https://www.pngmart.com/files/7/Calculator-PNG-Pic.png" width="500" height="500">
    </div>
@endsection()