@extends('layouts.principal')

@section('title', 'Suma')

@section('content')
    <script>
        a = prompt("Escribe un numero");
        document.write("<h1 style='text-align: center';>La tabla de suma es del " + a + "</h1>");
        document.write("<table align='center'>");
        for(var i = 0; i<= 10; i++){
            var b = parseInt(a) + parseInt(i);
            document.write("<tr><td width='50'><b>" + a + "</b></td><td width='50'>+</td><td width='50'>" + i + "</td><td>=</td><td width='50'>" + b + "</td></tr>");
        }
        document.write("</table>");
    </script><br>
    <div><a href="/laravel/calculadora/public/">Volver</a></div>
    
@endsection()
