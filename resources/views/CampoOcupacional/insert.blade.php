
@extends('layouts.app')

@section('contenido')


<section id="basic-input">
    <form action="{{Route('InsertCampoOcu')}}" method="POST" class="needs-validation"  novalidate>
        @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Registrar Campo Ocupacional </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="nombre_campo_ocu">Nombre Campo Ocupacional </label>
                                <input type="text" class="form-control" name="nombre_campo_ocu" id="nombre_campo_ocu" placeholder=" Ingrese tipo de programa" required />
                                <div class="invalid-tooltip">El valor "Nombre Campo Ocupacional" es Obligatorio.</div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="codigo_campo_ocu">Codigo Campo Ocupacional: </label>
                                <input type="text" class="form-control" name="codigo_campo_ocu" id="codigo_campo_ocu" placeholder=" Ingrese titulo del certificado" required />
                                <div class="invalid-tooltip">El valor "titulo certificado" es Obligatorio.</div>
                            </div>
                        </div>
                        
                  
                         
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <br>
                                <button class="btn btn-primary" type="submit">Registrar</button>
                              
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

