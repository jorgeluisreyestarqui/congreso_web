@extends('layouts.app')


@section('content')
    <h1>Suma de 2 numeros</h1>
    <form action="/suma" method="post">
         @csrf
        <label for="num1">Numero 1:</label> 
        <input type="number" name="num1" id="num1" required>
        <br>

        <label for="num2">Numero 2:</label> 
        <input type="number" name="num2" id="num2" required>
        <br>
        
        <button type="submit">Sumar</button>
    </form>
    <br>
    @if (isset($res))
    <p>El resultado de la suma es: {{$res}}</p>
    @endif
@endsection