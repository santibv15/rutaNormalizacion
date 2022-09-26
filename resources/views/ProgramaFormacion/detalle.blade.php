@extends('layouts.app')

@section('contenido')
<section id="basic-input">
<div class="row">
    <div class="card">
        @foreach ($detalleprograma as $programaf)
<div class="detalles">
    <div class="fila">
        <div class="columna">
            <div class="header">Denominacion: </div>
            <div class="contenido">{{$programaf->denominacion_prog}}</div>
        </div>

        <div class="columna">
            <div class="header">Denominacion: </div>
            <div class="contenido">{{$programaf->codigo_prog}}</div>
        </div>

    </div>
    @endforeach
</div>
</div>
</div>
</section>


@include('layouts.Footer')
@endsection

