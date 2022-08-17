@extends('menu')

@section('contenido')
<form action="{{Route('UpdateBdCentrof')}}" method="POST">
    @csrf
    <label for="nombre">nombre centro: </label>
    <input type="text" name="nombre" value="{{$updatecentrof->nombre}}" >
    <select name="regional_id" id="ui search dropdown" >
        <option value="">seleccione un regional</option>
        @foreach ($inforegional as $regional)
       <option value="{{$regional->id}}">{{$regional->nombre_region}}</option>
       @endforeach
    <input type="submit" value="Actualizar" >
</form>
@endsection


