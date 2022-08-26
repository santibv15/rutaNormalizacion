

@extends('layouts.app')

@section('contenido')


<section id="basic-input">
    <form action="{{Route('UpdateBdMesa')}}" method="POST" class="needs-validation"  novalidate>
        @csrf
        <input type="hidden" name="id" value="{{$updatemesa->id}}">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Actualizar Mesa sectorial </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="nombre_sector">Categoria: </label>
                                <input type="text" class="form-control" name="nombre_sector" id="nombre_sector" value="{{$updatemesa->nombre_sector}}" required  />
                                <div class="invalid-tooltip">El "Categoria" es Obligatorio.</div>
                            </div>
                        </div>
                        
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="codigo">Codigo: </label>
                                <input type="text" id="codigo" name="codigo" class="form-control" value="{{$updatemesa->codigo}}"  required />
                                <div class="invalid-tooltip">El "Codigo" es Obligatorio.</div>
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