@extends('menu')

@section('contenido')


<form action="{{Route('UpdateBdCategoria')}}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$updatecategoria->id}}">
    <label for="categoria">categoria:</label>
    <input type="text" name="tipo_categoria" value="{{$updatecategoria->tipo_categoria}}" >
    <label for="ambito">ambito: </label>
    <input type="text" name="ambito" value="{{$updatecategoria->ambito}}" >
    <input type="submit" value="Actualizar">
</form>
@endsection