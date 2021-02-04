@extends('layouts.plantilla')

@section('contenido')

<h1> Prueba </h1>
{{date('d/m/y')}}

<form action="post">
        <input type="text">
        <input class="form-control" type="email" name="mail">
        <input class="form-control" type="password" name="contrasena">
        <input class="form-control" type="number" name="numero">
       
    </form>


@endsection
