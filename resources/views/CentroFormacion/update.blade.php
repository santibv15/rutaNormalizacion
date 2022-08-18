
@extends('menu')
@section('contenido')


<form action="{{Route('UpdateBdCentrof')}}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$updatecentrof->id}}">
    <label for="nombre_centro">nombre centro: </label>
    <input type="text" name="nombre" value="{{$updatecentrof->nombre}}" >
    <select name="regional_id" id="ui search dropdown" >
        <option value="">seleciona regional</option>
        @foreach ($inforegional as $regional)
        
        <option value="{{$regional->id}}">{{$regional->nombre_region}}</option>
        @endforeach
       
   
    </select>
    <input type="submit" value="Actualizar"  >
</form>
@endsection


