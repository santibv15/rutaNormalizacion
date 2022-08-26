@extends('layouts.app')

@section('contenido')


<section id="basic-input">
    <form action="{{Route('InsertCategoria')}}" method="POST" class="needs-validation"  novalidate>
        @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Registrar Categoria</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="tipo_categoria">Categoria: </label>
                                <input type="text" class="form-control" name="tipo_categoria" id="tipo_categoria" placeholder=" Ingrese el tipo de categoria" required />
                                <div class="invalid-tooltip">El valor "Categoria" es Obligatorio.</div>
                            </div>
                        </div>
                        
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="ambito">Ambito: </label>
                                <input type="text" id="ambito" name="ambito" class="form-control" placeholder="Ingrese el ambito"  required/>
                                <div class="invalid-tooltip">El valor "Ambito" es Obligatorio.</div>
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