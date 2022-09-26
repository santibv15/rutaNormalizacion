
@extends('layouts.app')

@section('contenido')


<section id="basic-input">
    <form action="{{Route('InsertSector')}}" method="POST" class="needs-validation"  novalidate>
        @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Registrar Sectores </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="tipo_sec_prog">Tipo Sector </label>
                                <input type="text" class="form-control" name="tipo_sec_prog" id="tipo_sec_prog" placeholder=" Ingrese tipo de sector" required />
                                <div class="invalid-tooltip">El valor "Tipo Sector" es Obligatorio.</div>
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

