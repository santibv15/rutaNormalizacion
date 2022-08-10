@extends('menu')
@section('contenido')
    <form action="{{Route('InsertMesa')}}" method="POST">
        @csrf
        <label for="sector">sector</label>
        <input type="text" name="nombre_sector" placeholder="ingrese el sector">
        <label for="codigo">codigo de la mesa: </label>
        <input type="text" name="codigo" placeholder="ingrese el codigo">
        <input type="submit" value="registrar">
    </form>

    
@endsection