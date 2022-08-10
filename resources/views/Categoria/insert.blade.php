@extends('menu');
@section('contenido')

<form action="{{Route('InsertCategoria')}}" method="POST">
    @csrf
    <label for="categoria">categoria:  </label>
    <input type="text" name="tipo_categoria" placeholder="ingrese categoria">
    <label for="ambito">ambito:  </label>
    <input type="text" name="ambito" placeholder="ingrese el ambito">

    <input type="submit" value="registrar">

     
</form>
@endsection