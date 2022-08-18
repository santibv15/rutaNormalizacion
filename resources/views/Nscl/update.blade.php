@extends('menu')
@section('contenido')


<form action="{{Route('UpdateBdNscl')}}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$updatenscl->id}}">
    <label for="titulo">titulo: </label>
    <input type="text" name="titulo" value="{{$updatenscl->titulo}}" >
    <label for="codigo">codigo: </label>
    <input type="text" name="codigo_nscl" value="{{$updatenscl->codigo_nscl}}" >
    <label for="version">version: </label>
    <input type="text" name="version" value="{{$updatenscl->version}}" >
    <label for="fecha_publi">fecha publicacion: </label>
    <input type="date" name="fecha_publicacion" value="{{$updatenscl->fecha_publicacion}}" >
    <label for="fecha_revi">fecha revision: </label>
    <input type="date" name="fecha_revision" value="{{$updatenscl->fecha_revision}}" >
    <label for="fecha_aprobacion">fecha aprobacion: </label>
    <input type="date" name="fecha_aprobacion" value="{{$updatenscl->fecha_aprobacion}}" >
    <label for="n_apro">numero aprobacion: </label>
    <input type="text" name="n_aprobacion" value="{{$updatenscl->n_aprobacion}}" >
    <label for="documento"> adjunte pdf: </label>
    <input type="file" name="documento" accept=".pdf" value="{{$updatenscl->documento}}">
    
    
    <select name="mesa_sectorial" id="ui search dropdown" >
        <option value="">seleciona mesa</option>
        @foreach ($infomesa as $mesa)
        <option value="{{$mesa->id}}">{{$mesa->nombre_sector}}</option>
        @endforeach
    </select>

    <select name="estado_producto" id="ui search dropdown" >
        <option value="">seleciona estado producto</option>
        @foreach ($infoestadop as $estadop)
        <option value="{{$estadop->id}}">{{$estadop->tipo_estado}}</option>
        @endforeach
    </select>

    <select name="centro_formacion" id="ui search dropdown" >
        <option value="">seleciona centro </option>
        @foreach ($infocentrof as $centrof)
        <option value="{{$centrof->id}}">{{$centrof->nombre}}</option>
        @endforeach
    </select>
    
    <select name="categoria" id="ui search dropdown" >
        <option value="">seleciona categoria</option>
        @foreach ($infocategoria as $categoria)
        <option value="{{$categoria->id}}">{{$categoria->tipo_categoria}}</option>
        @endforeach
    </select>

    <input type="submit" value="Actualizar"  >
</form>

<style>
    label, select, input{
        margin: 10px;
    }

    
</style>
@endsection

