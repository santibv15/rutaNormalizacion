@extends('menu');
@section('contenido')



<form action="{{route('InsertNscl')}}" method="POST">
    @csrf
    <label for="titulo">titulo: </label>
    <input type="text" name="titulo" placeholder="ingrese titulo de nscl">
    <label for="codigo">Codigo:  </label>
    <input type="text" name="codigo_nscl" placeholder="ingrese el codigo nscl">
    <label for="version">version: </label>
    <input type="text" name="version" placeholder="ingrese version de nscl">
    <label for="fecha_publicacion">Fecha de publicacion:</label>
    <input type="date" name="fecha_publicacion">
    <label for="fecha_revision">fecha de revision: </label>
    <input type="date" name="fecha_revision">
    <label for="fecha_aprobacion">fecha de aprobacion: </label>
    <input type="date" name="fecha_aprobacion">
    <label for="n_aprobacion">numero aprobacion: </label>
    <input type="text" name="n_aprobacion" placeholder="ingrese numero de aprobacion">
    <label for="documento"> adjunte pdf: </label>
    <input type="file" name="foto" accept=".pdf">

    <label for="mesa">mesa sectorial: </label>
    <select name="mesa_sectorial" id="ui search dropdown" >
        <option value="">seleccione un mesa</option>
        @foreach ($infomesa as $mesa)
        <option value="{{$mesa->id}}">{{$mesa->nombre_sector}}</option>
        @endforeach
    </select>


    <label for="estado">estado producto:</label>
    <select name="estado_producto" id="ui search dropdown" >
        <option value="">seleccione estado del producto</option>
        @foreach ($infoestadop as $estadop)
        <option value="{{$estadop->id}}">{{$estadop->tipo_estado}}</option>
        @endforeach
    </select>

    <label for="centro">centro de formacion: </label>
    <select name="centro_formacion" id="ui search dropdown" >
        <option value="">seleccione un centro</option>
        @foreach ($infocentrof as $centrof)
        <option value="{{$centrof->id}}">{{$centrof->nombre}}</option>
        @endforeach
    </select>
    <label for="categoria">categoria: </label>
    <select name="categoria" id="ui search dropdown" >
        <option value="">seleccione un categoria</option>
        @foreach ($infocategoria as $categoria)
        <option value="{{$categoria->id}}">{{$categoria->tipo_categoria}}</option>
        @endforeach
    </select>
    <input type="submit" value="registrar">

     
</form>

<style>
    label, select, input{
        margin: 10px;
    }

    
</style>
@endsection