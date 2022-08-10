@extends('menu')

@section('contenido')


<form action="{{Route('UpdateBdEstadoP')}}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$updateestadop->id}}">
    <label for="tipo_estado">tipo de estado: </label>
    <input type="text" name="tipo_estado" value="{{$updateestadop->tipo_estado}}" >
    <input type="submit" value="Actualizar"  >
</form>
@endsection