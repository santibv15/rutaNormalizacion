@extends('menu');
@section('contenido')



<form action="" method="POST">
    @csrf
    <label for="titulo">titulo: </label>
    <input type="text" name="titulo" placeholder="ingrese titulo de nscl">
    <label for="codigo">Codigo:  </label>
    <input type="text" name="codigo" placeholder="ingrese el codigo nscl">
    <label for="version">version: </label>
    <input type="text" name="version" placeholder="ingrese version de nscl">
    <label for="categoria">categoria: </label>
    <select name="categoria" id="ui search dropdown" >
        <option value="">seleccione un categoria</option>
        {{-- @foreach ($inforegional as $regional)
       <option value="{{$regional->id}}">{{$regional->nombre_region}}</option>
        @endforeach --}}
    </select>
    <label for="mesa">mesa sectorial: </label>
    <select name="mesa" id="ui search dropdown" >
        <option value="">seleccione un mesa</option>
    </select>
    <label for="fecha_publicacion">Fecha de publicacion:</label>
    <input type="date" name="fecha_publicacion">
    <label for="fecha_revision">fecha de revision: </label>
    <input type="date" name="fecha_revision">
    <label for="fecha_aprobacion">fecha de aprobacion: </label>
    <input type="date" name="fecha_aprobacion">
    <label for="estado">estado producto:</label>
    <select name="estado_producto" id="ui search dropdown" >
        <option value="">seleccione estado del producto</option>
    </select>
    <label for="centro">centro de formacion: </label>
    <select name="centro_formacion" id="ui search dropdown" >
        <option value="">seleccione un centro</option>
    </select>

    <label for="documento"> adjunte pdf: </label>
    <input type="file" name="foto" accept=".pdf">
    <input type="submit" value="registrar">

     
</form>

<style>
    label, select, input{
        margin: 10px;
    }

    
</style>
@endsection