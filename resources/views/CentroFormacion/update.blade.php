@extends('menu')

@section('contenido')


<form action="{{Route('UpdateBdRegional')}}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$updateregional->id}}">
    <label for="regional">nombre centro: </label>
    <input type="text" name="nombre" value="{{$updateregional->nombre_region}}" >
    <input type="submit" value="Actualizar" >
</form>
@endsection