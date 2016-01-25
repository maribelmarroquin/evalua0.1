@extends('principal')

@section('titulo', 'UV')

@section('contenido')

<h3 style="text-align: center">Bienvenido al Sistema de Evaluaciones - Olvidé mi contraseña.</h3>

De click en el siguiente link para cambiar su contraseña   {{ url('password/reset/'.$token) }}

@endsection