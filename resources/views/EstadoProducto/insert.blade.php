@extends('menu')

@section('contenido')


<section id="basic-input">
    <form action="{{Route('InsertEstadoP')}}" method="POST" class="needs-validation"  novalidate>
        @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Registrar Estado </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">Estado del producto: </label>
                                <input type="text" class="form-control" name="tipo_estado" id="basicInput" placeholder=" Ingrese el estado" required/>
                                <div class="invalid-tooltip">El valor "Estado del producto" es Obligatorio.</div>
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
@endsection