


@extends('layouts.app')

@section('contenido')


<section id="basic-input">
    <form action="{{Route('UpdateBdSector')}}" method="POST" class="needs-validation"  novalidate>
        @csrf
        <input type="hidden" name="id" value="{{$updatesector->id}}">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Actualizar Sectores </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="nombre_tipo_prog">Tipo de Sector: </label>
                                <input type="text" class="form-control" name="tipo_sec_prog" id="tipo_sec_prog" value="{{$updatesector->tipo_sec_prog}}" required/>
                                <div class="invalid-tooltip">El "Nombre tipo programa" es Obligatorio.</div>
                            </div>
                        </div>
                        
                         
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <br>
                                <button class="btn btn-primary" type="submit">Actualizar</button>
                              
                            </div>
                         </div>
                        
                    </div>
                </div>
            </div>
        </div>
       
    </div>
    
</form>
</section>
@include('layouts.Footer')
@endsection