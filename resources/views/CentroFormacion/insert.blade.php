@extends('menu')
@section('contenido')
    <form action="{{Route('InsertCentrof')}}" method="POST" >
        @csrf <!--esto es para el token-->
        <label for="nombre">nombre del centro</label>
        <input type="text" name="nombre" placeholder="ingrese nombre">
        <select name="regional_id" id="ui search dropdown" >
            <option value="">seleccione un regional</option>
            @foreach ($inforegional as $regional)
           <option value="{{$regional->id}}">{{$regional->nombre_region}}</option>
            @endforeach
        </select>
        <input type="submit" value="Registrar">
        
    </form>
@endsection