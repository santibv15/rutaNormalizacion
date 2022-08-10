@extends('menu')

@section('contenido')


<form action="{{Route('UpdateBdMesa')}}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$updatemesa->id}}">
    <label for="tipo_estado">sector: </label>
    <input type="text" name="nombre_sector" value="{{$updatemesa->nombre_sector}}" >
    <label for="tipo_estado">codigo mesa: </label>
    <input type="text" name="codigo" value="{{$updatemesa->codigo}}" >
    <input type="submit" value="Actualizar"  >
</form>
@endsection