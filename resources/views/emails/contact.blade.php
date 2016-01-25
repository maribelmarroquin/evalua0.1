@extends('principal')

@section('titulo', 'UV')

@section('contenido')


<p><strong>Nombre: </strong>{!! $nombre !!}</p>
<p><strong>Correo: </strong>{!! $email !!}</p>
<p><strong>Mensaje: </strong>{!! $mensaje !!}</p>

@endsection