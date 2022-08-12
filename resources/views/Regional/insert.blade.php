@extends('menu')
@section('contenido')
    
    <form action="{{Route('InsertRegional')}}" method="POST">
        @csrf
        <label for="regional">nombre de regional: </label>
        <input type="text" name="nombre_region" placeholder="ingrese el nombre de la region">
        <input type="submit" value="Registrar">
    </form>

@endsection