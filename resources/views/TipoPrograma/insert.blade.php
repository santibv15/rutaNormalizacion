
@extends('layouts.app')

@section('contenido')


<section id="basic-input">
    <form action="{{Route('InsertTipoPro')}}" method="POST" class="needs-validation"  novalidate>
        @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Registrar Tipo de Programa </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="nombre_tipo_prog">Nombre de tipo: </label>
                                <input type="text" class="form-control" name="nombre_tipo_prog" id="nombre_tipo_prog" placeholder=" Ingrese tipo de programa" required />
                                <div class="invalid-tooltip">El valor "tipo programa" es Obligatorio.</div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="titulo_cert_prog">Titulo Certificado: </label>
                                <input type="text" class="form-control" name="titulo_cert_prog" id="titulo_cert_prog" placeholder=" Ingrese titulo del certificado" required />
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

