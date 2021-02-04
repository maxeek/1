@extends('layouts.plantilla')

@section('contenido')

<h1> Ingrese datos </h1>
<h2>{{date('d/m/y')}}</h2>

<div class="bg-light border col-8 mx-auto p-4">
<form action="/procesarDatos" method="post">
                @csrf

                Nombre: <br>
                <input type="text" name="nombre" class="form-control">
                <br>
                
                
                Año de Nacimiento: <br>
                <select name="anio" class="form-control">
                @for( $i=date('Y'); $i>1450; $i-- )
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
                </select>
                <br>
                <button class="btn btn-dark btn-block">Enviar datos</button>
            </form>


</div>


@endsection
