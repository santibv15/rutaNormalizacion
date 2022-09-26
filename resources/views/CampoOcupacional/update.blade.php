


@extends('layouts.app')

@section('contenido')


<section id="basic-input">
    <form action="{{Route('UpdateBdCampoOcu')}}" method="POST" class="needs-validation"  novalidate>
        @csrf
        <input type="hidden" name="id" value="{{$updatecampoocu->id}}">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Actualizar Campo Ocupacional </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="nombre_tipo_prog">Nombre Campo Ocupacional: </label>
                                <input type="text" class="form-control" name="nombre_campo_ocu" id="nombre_campo_ocu" value="{{$updatecampoocu->nombre_campo_ocu}}" required/>
                                <div class="invalid-tooltip">El "Nombre Campo Ocupacional" es Obligatorio.</div>
                            </div>
                        </div>
                        
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="titulo_cert_prog">Codigo Campo Ocupacional: </label>
                                <input type="text" class="form-control" name="codigo_campo_ocu" id="codigo_campo_ocu" value="{{$updatecampoocu->codigo_campo_ocu}}" required/>
                                <div class="invalid-tooltip">El "Codigo Campo Ocupacional" es Obligatorio.</div>
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