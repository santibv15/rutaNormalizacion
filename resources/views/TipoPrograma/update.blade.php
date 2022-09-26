


@extends('layouts.app')

@section('contenido')


<section id="basic-input">
    <form action="{{Route('UpdateBdTipoPro')}}" method="POST" class="needs-validation"  novalidate>
        @csrf
        <input type="hidden" name="id" value="{{$updatetipopro->id}}">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Actualizar Tipo de Programa </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="nombre_tipo_prog">Nombre tipo programa: </label>
                                <input type="text" class="form-control" name="nombre_tipo_prog" id="nombre_tipo_prog" value="{{$updatetipopro->nombre_tipo_prog}}" required/>
                                <div class="invalid-tooltip">El "Nombre tipo programa" es Obligatorio.</div>
                            </div>
                        </div>
                        
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="titulo_cert_prog">Titulo de Certificado: </label>
                                <input type="text" class="form-control" name="titulo_cert_prog" id="titulo_cert_prog" value="{{$updatetipopro->titulo_cert_prog}}" required/>
                                <div class="invalid-tooltip">El "Titulo de Certificado" es Obligatorio.</div>
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