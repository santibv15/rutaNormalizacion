@extends('menu');
@section('contenido')

<form action="{{Route('InsertEstadoP')}}" method="POST">
    @csrf
    <label for="Tipo_estado">estado del producto:  </label>
    <input type="text" name="tipo_estado" placeholder="ingrese el tipo de estado">
    <input type="submit" value="registrar">

     
</form>
@endsection