@extends('menu')

@section('contenido')
<form action="{{Route('UpdateBdCentrof')}}" method="POST">
    @csrf
    @foreach ($inforegional as $regional)
    <label for="nombre">nombre centro: </label>
    <input type="text" name="nombre" value="{{$inforegional->nombre}}" >
    <select name="regional_id" id="ui search dropdown" >
        <option value="">seleccione un regional</option>
        
       <option value="{{$regional->id}}">{{$regional->nombre_region}}</option>

    </select>
    @endforeach
    <input type="submit" value="Actualizar" >
</form>
@endsection


